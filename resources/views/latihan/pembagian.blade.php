<h1>Pembagian</h1>

<form action="{{route('store_pembagian')}}" method="POST">
    @csrf
    <label for="">Angka 1</label>
    <input type="text" name="angka1" placeholder="Masukkan Nilai Angka 1">
    <br><br>
    <label for="">Angka 2</label>
    <input type="text" name="angka2" placeholder="Masukkan Nilai Angka 2">
    <br><br>
    <input type="submit" value="Submit">
</form>
<h4>Hasil : {{$bagi}}</h4>
