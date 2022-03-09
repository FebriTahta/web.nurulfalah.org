<?php

namespace App\Http\Controllers;
use App\Models\Posting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function post_daftar(Request $request)
    {
        $beritas = Posting::whereHas('jenisposting', function($q){
            $q->where('name','berita');
        })->paginate(1);

        if ($request->ajax()) {
            # code...
            $view   = view('berita_artikel.data_berita',compact('beritas'))->render();
            return response()->json(['html',$view]);
        }
        
        return view('berita_artikel.list_berita',compact('beritas'));
    }

    public function load_more(Request $request)
    {
        if($request->ajax())
        {
            if($request->id > 0)
            {
            $data = DB::table('post')
                ->where('id', '<', $request->id)
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->get();
            }
            else
            {
            $data = DB::table('post')
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->get();
            }
            $output = '';
            $last_id = '';
            
            if(!$data->isEmpty())
            {
                foreach($data as $row)
                {
                    $output .= '
                    <div class="row">
                    <div class="col-md-12">
                    <h3 class="text-info"><b>'.$row->post_title.'</b></h3>
                    <p>'.$row->post_description.'</p>
                    <br />
                    <div class="col-md-6">
                    <p><b>Publish Date - '.$row->date.'</b></p>
                    </div>
                    <div class="col-md-6" align="right">
                    <p><b><i>By - '.$row->author.'</i></b></p>
                    </div>
                    <br />
                    <hr />
                    </div>         
                    </div>
                    ';
                    $last_id = $row->id;
                }
                $output .= '
                <div id="load_more">
                    <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
                </div>
                ';
            }
            else
            {
                $output .= '
                <div id="load_more">
                    <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
                </div>
                ';
            }
            echo $output;
        }
    
    }
}
