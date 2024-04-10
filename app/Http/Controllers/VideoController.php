<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoInfo;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'video' => 'required|file|mimes:mp4,mkv|max:102400',
        ]);



        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $filename = time() . '.' . $video->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $video->move($destinationPath, $filename);
            $filePath = $destinationPath . '/' . $filename;
            $cmd = "ffmpeg -i " . escapeshellarg($filePath) . " 2>&1 | grep 'Duration' | cut -d ' ' -f 4 | sed s/,//";
            $videoLengthStr = trim(shell_exec($cmd));
            if (!empty($videoLengthStr)) {
                $timeComponents = explode(':', $videoLengthStr);
                if (count($timeComponents) === 3) {
                    list($hours, $mins, $secs) = $timeComponents;
                    $videoLength = ($hours * 3600) + ($mins * 60) + $secs;
                } else {
                    $videoLength = 0;
                }
            } else {
                $videoLength = 0;
            }
            $title = $request->input('title');
            $description = $request->input('description');
            $videoRecord = new VideoInfo();
            $videoRecord->title = $title;
            $videoRecord->description = $description;
            $videoRecord->child_id = $request->input('child_id');
            $videoRecord->video_length = $videoLength;
            $videoRecord->file_path = '/uploads/' . $filename;
            $videoRecord->status = 1;
            $videoRecord->tag = 'chat';
            $videoRecord->category = '';
            $videoRecord->date = now();
            $videoRecord->save();

            return back()->with('success', 'Video uploaded successfully.');
        }

        return back()->with('error', 'Please select a video to upload.');
    }
}
