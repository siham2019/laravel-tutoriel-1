<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class courseController extends Controller
{
    public function vb(Request $request)
    {
     /*  session(['xx' => 'bbb']);
        $value = session('xx');
         echo $value; */

       /*   $value = $request->session()->get('xx');
         echo $value; */

    /*      $value = session('xx', 'default');
         echo $value; */
        
/*          $request->session()->forget('user');
 */         

/*            $request->session()->flush();
 */
        $data = $request->session()->all();
         print_r($data);
       
      /*    $request->session()->push('user.teams', 'developers');
         $value = session('user.teams');
         print_r($value); */
    }
    
    
    public function show()
    {
        $courses=Course::all();
         
        echo "<ul>";

        foreach ($courses as $course) {
            echo "<li>".$course->details;
            foreach ($course->user as $user) {
                echo " *** ".$user->name."</li>";
            }
        }
        
        echo "</ul>";
    }
}
