<?php
/*
Plugin Name: Bangla Ramadan Time(2021)
Plugin URI: https://synthiasoft/ramadan-times
Description: We are Developed This Free Plugin For Showing Ramadan Times Update For Wordpress Web Site.
Author: SynthiaSoft
Author URI: http://synthiasoft.com/
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Version: 21

*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License version 3
as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

License Details: http://www.gnu.org/licenses/gpl-3.0.html
*/
// Translate Function By Rumi

// Ramadan Time Function
// Register and load the widget
function Bangla_ramadan_time_int()
{
    register_widget('bangla_ramadan_time_widget');
}

add_action( 'widgets_init', 'Bangla_ramadan_time_int' );
 
// Creating the widget 
class bangla_ramadan_time_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'bangla_ramadan_time_widget', 
 
// Widget name will appear in UI
__('Bangla Ramadan Time Widget', 'bangla_ramadan_time_id'), 
 
// Widget description
array( 'description' => __( 'Bangla Ramadan Time Widget', 'bangla_ramadan_time_id' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
echo do_shortcode('[bangla_ramadan_time]');

echo $args['after_widget'];




}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'সাহরি ও ইফতারের সময় সূচি', 'bangla_ramadan_time_id' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

date_default_timezone_set('Asia/Dhaka');



function Bangla_ramadan_time_shedule($date="",$perm ='ramadan'){
      if ($date) {
         $dat = $date;
      }else{
         $dat = date('d-m-Y');
      }
      
    
   $json ='{
   "14-04-2021": {
      "sehri": "4:16",
      "iftar": "6:23",
      "ramadan": "1"
   },
   "15-04-2021": {
      "sehri": "4:15",
      "iftar": "6:23",
      "ramadan": "2"
   },
   "16-04-2021": {
      "sehri": "4:14",
      "iftar": "6:23",
      "ramadan": "3"
   },
   "17-04-2021": {
      "sehri": "4:13",
      "iftar": "6:24",
      "ramadan": "4"
   },
   "18-04-2021": {
      "sehri": "4:12",
      "iftar": "6:24",
      "ramadan": "5"
   },
   "19-04-2021": {
      "sehri": "4:11",
      "iftar": "6:25",
      "ramadan": "6"
   },
   "20-04-2021": {
      "sehri": "4:10",
      "iftar": "6:25",
      "ramadan": "7"
   },
   "21-04-2021": {
      "sehri": "4:9",
      "iftar": "6:26",
      "ramadan": "8"
   },
   "22-04-2021": {
      "sehri": "4:8",
      "iftar": "6:26",
      "ramadan": "9"
   },
   "23-04-2021": {
      "sehri": "4:7",
      "iftar": "6:26",
      "ramadan": "10"
   },
   "24-04-2021": {
      "sehri": "4:6",
      "iftar": "6:27",
      "ramadan": "11"
   },
   "25-04-2021": {
      "sehri": "4:5",
      "iftar": "6:28",
      "ramadan": "12"
   },
   "26-04-2021": {
      "sehri": "4:4",
      "iftar": "6:29",
      "ramadan": "13"
   },
   "27-04-2021": {
      "sehri": "4:3",
      "iftar": "6:29",
      "ramadan": "14"
   },
   "27-04-2021": {
      "sehri": "4:2",
      "iftar": "6:29",
      "ramadan": "15"
   },
   "29-04-2021": {
      "sehri": "4:1",
      "iftar": "6:30",
      "ramadan": "16"
   },
   "30-04-2021": {
      "sehri": "4:00",
      "iftar": "6:30",
      "ramadan": "17"
   },
   "01-05-2021": {
      "sehri": "3:59",
      "iftar": "6:31",
      "ramadan": "18"
   },
   "02-05-2021": {
      "sehri": "3:58",
      "iftar": "6:31",
      "ramadan": "19"
   },
   "03-05-2021": {
      "sehri": "3:48",
      "iftar": "6:32",
      "ramadan": "20"
   },
   "04-05-2021": {
      "sehri": "3:55",
      "iftar": "6:32",
      "ramadan": "21"
   },
   "05-05-2021": {
      "sehri": "3:47",
      "iftar": "6:33",
      "ramadan": "22"
   },
   "06-05-2021": {
      "sehri": "3:53",
      "iftar": "6:33",
      "ramadan": "23"
   },
   "07-05-2021": {
         "sehri": "3:52",
         "iftar": "6:34",
         "ramadan": "24"
      },
  
   "08-05-2021": {
      "sehri": "3:51",
      "iftar": "6:34",
      "ramadan": "25"
   },
   "09-05-2021": {
      "sehri": "3:50",
      "iftar": "6:35",
      "ramadan": "26"
   },
   "10-05-2021": {
      "sehri": "3:50",
      "iftar": "6:35",
      "ramadan": "27"
   },
   "11-05-2021": {
      "sehri": "3:49",
      "iftar": "6:36",
      "ramadan": "28"
   },
   "12-05-2021": {
      "sehri": "3:49",
      "iftar": "6:36",
      "ramadan": "29"
   },
   "13-05-2021": {
      "sehri": "3:48",
      "iftar": "6:36",
      "ramadan": "30"
   }
}';

$output = json_decode($json);
if (isset($output->{$dat})) {
   return $output->{$dat}->$perm;
}

// return $dat;


}

 function Bangla_Convert($number){
     $search_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0","Jan","Feb","Mar", "Apr", "May", "Jun","Jul","Aug","Sep","Oct","Nov","Dec","Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    $replace_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০","জানুয়ারী","ফেব্রুয়ারী","মার্চ", 
  "এপ্রিল","মে","জুন","জুলাই","আগস্ট", "সেপ্টেম্বর", "অক্টোবর","নভেম্বর","ডিসেম্বর","সোমবার","মঙ্গলবার","বুধবার","বৃহস্পতিবার","শুক্রবার","শনিবার","রবিবার");
   
    $bn_number = str_replace($search_array, $replace_array, $number);

    return $bn_number;
}


function Bangla_iftar($add=0){
      $iftar = Bangla_ramadan_time_shedule('','iftar');
$time = strtotime($iftar);
$output = date("H:i", strtotime('10'.' minutes', $time));
$iftar = new DateTime(date('d-m-Y'). $output.":00 am");
$current = new DateTime(date('d-m-Y H:i:s a'));

if ($iftar > $current) {
    $iftar = Bangla_ramadan_time_shedule("",'iftar');
}elseif ($iftar < $current) {
   $timestamp = strtotime("tomorrow");


$tomorrow = date("d-m-Y", $timestamp);
   $iftar = Bangla_ramadan_time_shedule($tomorrow,'iftar');
}

   

$time = strtotime($sehri);
$output = date("H:i", strtotime($add.' minutes', $time));
return $output;
}

function Bangla_sehri($add=0){
   $sehri = Bangla_ramadan_time_shedule('','sehri');
$time = strtotime($sehri);
$output = date("H:i", strtotime('10'.' minutes', $time));
$sehri = new DateTime(date('d-m-Y'). $output.":00 am");
$current = new DateTime(date('d-m-Y H:i:s a'));

if ($sehri > $current) {
    $sehri = Bangla_ramadan_time_shedule("",'sehri');
}elseif ($sehri < $current) {
   $timestamp = strtotime("tomorrow");


$tomorrow = date("d-m-Y", $timestamp);
   $sehri = Bangla_ramadan_time_shedule($tomorrow,'sehri');
}

   

$time = strtotime($sehri);
$output = date("H:i", strtotime($add.' minutes', $time));
return $output;
}

function sehri_prefix(){
$sehri = Bangla_ramadan_time_shedule('','sehri');
$time = strtotime($sehri);
$output = date("H:i", strtotime('10'.' minutes', $time));
$sehri = new DateTime(date('d-m-Y'). $output.":00 am");
$current = new DateTime(date('d-m-Y H:i:s a'));

if ($sehri > $current) {
    return 'আজ';    
}elseif ($sehri < $current) {
    return 'আজ';
}

}

function iftar_prefix(){
$iftar = Bangla_ramadan_time_shedule('','iftar');
$time = strtotime($iftar);
$output = date("H:i", strtotime('10'.' minutes', $time));
$iftar = new DateTime(date('d-m-Y'). $output.":00 pm");
$current = new DateTime(date('d-m-Y H:i:s a'));

if ($iftar > $current) {
    return 'আজ';    
}

if ($iftar < $current) {
    return $iftar.'আগামী কাল';
}

}

function bangla_ramadan_time_function($atts="")
{
   $style ="<style>
   @import url('https://fonts.maateen.me/solaiman-lipi/font.css');

   /* bnRamadanTime */
.bnRamadanTime{
   display: table;
   width: 100%;
   font-family: solaimanlipi;
}
.bnRamadanTimeRow {
   display: table-row;
}
.bnRamadanTimeHeading {
   background-color: #EEE;
   display: table-header-group;
}
.bnRamadanTimeCell, .bnRamadanTimeHead {
   border: 1px solid #999999;
   display: table-cell;
   padding: 3px 10px;
   text-align: center;
       width: 33%;
}
.bnRamadanTimeHeading {
   background-color: #EEE;
   display: table-header-group;
   font-weight: bold;
}
.bnRamadanTimeFoot {
   background-color: #EEE;
   display: table-footer-group;
   font-weight: bold;
}
.bnRamadanTimeBody {
   display: table-row-group;
}
.bnRamadanTimeH{
       background: #157ec4;
    color: white;
    font-family: solaimanlipi
}</style>";

$html = '<div style="text-align: center;margin-bottom:0px;padding: 10px" class="bnRamadanTimeH"> 

      সাহরি ও ইফতারের সময়সূচী <br>
  '.Bangla_Convert(date('( D,d M Y )')).'
</div>
<div class="bnRamadanTime">
<div class="bnRamadanTimeBody">
<div class="bnRamadanTimeRow bnRamadanTimeH">
<div class="bnRamadanTimeCell">&nbsp;বিভাগ</div>
<div class="bnRamadanTimeCell">&nbsp;'.sehri_prefix().' সাহরি শেষ</div>
<div class="bnRamadanTimeCell">&nbsp;'.iftar_prefix().' ইফতার</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;ঢাকা</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri()).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar()).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;চট্টগ্রাম</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(-2)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(-8)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;সিলেট</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(-9)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(-4)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;রাজশাহী</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(+5)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(+8)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;বরিশাল</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(+2)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(-2)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;খুলনা</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(+6)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(+2)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;রংপুর</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(-1)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(+6)).' মিঃ</div>
</div>
<div class="bnRamadanTimeRow">
<div class="bnRamadanTimeCell">&nbsp;ময়মনসিংহ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_sehri(-3)).' মিঃ</div>
<div class="bnRamadanTimeCell">&nbsp;'.Bangla_Convert(Bangla_iftar(+1)).' মিঃ</div>
</div>
</div>
</div>';
if (empty(Bangla_ramadan_time_shedule('','ramadan'))) {

   $html = '<div><h2 style="font-family:solaimanlipi">ঈদ মোবারক</h2></div>';
}
return $style.$html;
 

}

add_shortcode('bangla_ramadan_time', 'bangla_ramadan_time_function');