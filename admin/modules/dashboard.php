<p>Thống kê đơn hàng theo</p>
<p>
	<select class="select-date">
	<option value="">Thống kê chi tiết</option>
		<option value="7ngay">7 ngày qua</option>
		<option value="30ngay">30 ngày qua</option>
		<option value="365ngay">365 ngày qua</option>
	</select>
</p>
<div id="chart" style="height: 250px;"></div>
<?php
// thống kê bằng ajax
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include('config/config.php');
    require('../carbon/autoload.php');
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    if(isset($_POST['thoigian'])){
    	$thoigian = $_POST['thoigian'];
	}else{
		$thoigian = '';
		$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();	
	}
    if($thoigian=='7ngay'){
    	$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
	}elseif($thoigian=='30ngay'){
    	$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();
	}elseif($thoigian=='365ngay'){
		$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();	
	}
	

    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString(); 

    $sql = "SELECT * FROM tbl_thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY ngaydat ASC" ;
    $sql_query = mysqli_query($mysqli,$sql);

    while($val = mysqli_fetch_array($sql_query)){

    	$chart_data[] = array(
	        'date' => $val['ngaydat'],
	        'order' => $val['donhang'],
	        'sales' => $val['doanhthu'],
	        'quantity' => $val['soluongban']
	        


    	);
    }
  	
   
?>