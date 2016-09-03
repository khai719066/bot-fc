@extends('view.master') @section('noidung') Day la gi @stop @section('slider') @parent :Cau tra loi

<?php
$monhoc=7;
?>
 @if($monhoc<=5) 
 	Yeu 
 @elseif($monhoc>=5&&$monhoc<=7) 
 Trung Binh 
 @else 	
 	Hoc sinh gioi 
 @endif 
 	{{isset($monhoc) ? $monhoc : 'hoc lai' }} <hr /> {{ $diemm or 'hoc lai'}} 
@for($i=0;$i<=10;$i=$i+1)
	So thu tu:{{ $i }}<br /> @endfor
    <?php $i=0  ?>

@while($i<=10)
	So thu tu: {{ $i }} <br />
    <?php  $i++ ?>
@endwhile

<?php
	$mang =['com','chao','pho']
?>
@foreach($mang as $item)
	So thu tu: {{ $item }}
	<br /> 
@endforeach 
@stop

