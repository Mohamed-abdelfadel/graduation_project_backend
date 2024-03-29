<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Models\Duel;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DuelController extends Controller
{

// USAGE-> Getting all matches
//  API-> /v1/matches
//  TODO NOT USED -> another way to preview matches (working)
    public function index()
    {
        $matches = Duel::query()
            ->select("id", "game_id" ,"tournament_id","team1_id", "team2_id" , "playoff_id" , "team1_score" , "team2_score" , "team2_score" , "status_id" , "starting_date","platform","video_link")
            ->with("game:id,name")
            ->with("tournament:id,name,logo")
            ->with("team1:id,name,logo")
            ->with("team2:id,name,logo")
            ->with("playoff:id,name")
            ->with("status:id,name")
            ->orderBy('starting_date' , 'desc')
            ->get();

        $matches_data = $matches->map(function ($match) {
            return [
                    "id" => $match->game->id,
                    "name" => $match->game->name,
                    "tournament" => [
                        "id" => $match->tournament->id,
                        "name" => $match->tournament->name,
                        "logo" => $match->tournament->logo,
                        "live_status" => $match->status->name,
                        "matches" => [
                            "id" => $match->id,
                            "starting_date" => $match->starting_date,
                            "team1" => [
                                "id" => $match->team1->id,
                                "name" => $match->team1->name,
                                "logo" => $match->team1->logo,
                                "score" => $match->team1_score,
                            ],
                            "team2" => [
                                "id" => $match->team2->id,
                                "name" => $match->team2->name,
                                "logo" => $match->team2->logo,
                                "score" => $match->team2_score,
                            ],
                            "playoff" =>[
                                "id" => $match->playoff->id,
                                "name" => $match->playoff->name
                            ]
                        ]
                    ],
            ];
        });
            return response($matches_data) ;
    }
        public function show($id){
            $match = Duel::query()
                ->select("id", "game_id" ,"tournament_id","team1_id", "team2_id" , "playoff_id" , "team1_score" , "team2_score" , "team2_score" ,"platform","video_link", "status_id" , "starting_date")
                ->with("game:id,name")
                ->with("tournament:id,name,logo")
                ->with("team1:id,name,logo")
                ->with("team2:id,name,logo")
                ->with("playoff:id,name")
                ->with("status:id,name")
                ->orderBy('starting_date' , 'desc')
                ->findOrFail($id);
            return [
                "id" => $match->game->id,
                "name" => $match->game->name,
                "tournament" => [
                    "id" => $match->tournament->id,
                    "name" => $match->tournament->name,
                    "logo" => $match->tournament->logo,
                    "live_status" => $match->status->name,
                    "matches" => [
                        "id" => $match->id,
                        "platform"=>$match->platform,
                        "video_link"=>$match->video_link,
                        "starting_date" => $match->starting_date,
                        "team1" => [
                            "id" => $match->team1->id,
                            "name" => $match->team1->name,
                            "logo" => $match->team1->logo,
                            "score" => $match->team1_score,
                        ],
                        "team2" => [
                            "id" => $match->team2->id,
                            "name" => $match->team2->name,
                            "logo" => $match->team2->logo,
                            "score" => $match->team2_score,
                        ],
                        "playoff" =>[
                            "id" => $match->playoff->id,
                            "name" => $match->playoff->name
                        ]
                    ]
                ],
            ];
        }
    public static function Reset_Status() {
        $now = Carbon::now('Asia/Riyadh')->format('Y-m-d HH:00:00');
        $duels = Duel::query()->get();

        foreach ($duels as $duel) {
            $startingDate = Carbon::parse($duel->starting_date, 'Asia/Riyadh')->format('Y-m-d HH:00:00');
            if ($startingDate > $now) {
                $duel->team1_score = null;
                $duel->team2_score = null;
                $duel->status_id = 3;
                $duel->save();

            } elseif ($startingDate < $now) {
                $duel->status_id = 1;
                $duel->save();
            }
            else if ($startingDate === $now){
                if($duel->status_id == 1){

                }
                else{
                    $duel->status_id = 2;
                    $duel->save();
                    $FcmToken = User::whereNotNull('device_key')
                        ->pluck('device_key');

                    if (count($FcmToken) == 0) {
                        return response()->json(['data' => 'Added Successfully ss'], 200);
                    }

                    $data = [
                        "registration_ids" => $FcmToken,
                        "notification" => [
                            "title" => "There are match ! ",
                            "body" => "come to watch Live match now !"
                        ]
                    ];
                    FirebaseController::sendWebNotification($data);

                    return response()->json(['data' => 'created successfully'], 200);
                }

            }
        }
    }

        public function store(Request $request){
            $match = new Duel()  ;
            $match->game_id = request('game_id') ;
            $match->playoff_id = request('playoff_id') ;
            $match->team1_id = request('team1_id') ;
            $match->team2_id = request('team2_id') ;
            $match->tournament_id = request('tournament_id') ;
            $match->starting_date = request('starting_date') ;
            $match->status_id = request('status_id') ;
            $match->save();
            return "Match added successfully" ;

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $record = Duel::find($id);
        $record->platform = $data['platform'];
        $record->video_link = $data['video_link'];
        $record->save();
        return response()->json(['message' => 'Record updated successfully']);
    }

    public function destroy($id){
        $match = Duel::query()->findOrFail($id) ;
        $match->delete() ;
        return "Match deleted successfully" ;
    }

    public function trash(){
        $matches = Duel::onlyTrashed()->get();
        $matches_data = $matches->map(function ($match) {
            return [
                "id" => $match->id,
                "playoff" => $match->playoff->name,
                "game" => [
                    "id" => $match->game->id,
                    "name" => $match->game->name,
                ],
                "tournament" => [
                    "id" => $match->tournament->id,
                    "name" => $match->tournament->name,
                    "logo" => $match->tournament->logo,
                ],
                "team1" => [
                    "id" => $match->team1->id,
                    "name" => $match->team1->name,
                    "logo" => $match->team1->logo,
                    "score" => $match->team1_score,
                ],
                "team2" => [
                    "id" => $match->team2->id,
                    "name" => $match->team2->name,
                    "logo" => $match->team2->logo,
                    "score" => $match->team2_score,
                ],
                "live_status" => $match->status->name,
                "starting_date" => $match->starting_date,
            ];
        });
        return response($matches_data) ;
    }

    public function restore($id){
        $match = Duel::onlyTrashed()->findOrFail($id);
        $match->restore() ;
        return response($match) ;
    }

    public function fdelete($id){
        $match = Duel::onlyTrashed()->findOrFail($id);
        $match->forceDelete() ;
        return response($match) ;
    }
}
