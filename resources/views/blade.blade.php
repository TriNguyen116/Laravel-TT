<h1>blade</h1>

<?php
//echo $welcome;
?>

<h2>{{ $welcome }}</h2>

<h2>{!! $welcome !!}</h2>

<h2>{!! $content !!}</h2>
<hr>
<p>Test for</p>

<?php
//for ($i = 1; $i <= 10; $i++) {
?>
<p>Phần tử: <?php //echo $i;
?> </p>
<?php
//}
?>

{{-- @for ($i = 1; $i <= 10; $i++)
    <p>Phần tử thứ: {{ $i }}</p>
@endfor --}}


{{-- @foreach ($dataArr as $item)
    <p>Phan tu: {{ $item }}</p>
@endforeach --}}


{{-- @forelse ($dataArr as $item)
    <p>Phan tu: {{ $item }}</p>
@empty
    <p>khong co phan tu nao</p>
@endforelse --}}

@for ($i = 1; $i <= 10; $i++)
    @if ($i == 5)
    @break
@endif
<p>Phan tu thu: {{ $i }}</p>
@endfor
