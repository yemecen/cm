@extends('layouts.main')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Kayıt</th>
        <th scope="col">No</th>
        <th scope="col">Başlık</th>
        <th scope="col">Oluş. Tarihi</th>
        <th scope="col">Zaman</th>
        <th scope="col">Oluşturan</th>
        <th scope="col">Modül</th>
        <th scope="col">Sorumlu</th>
        <th scope="col">Öncelik</th>
        <th scope="col">Durum</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cms as $cm)
            <tr>
                <td>B</td>
                <th scope="row">{{$cm->ID}}</th>
                <td>{{$cm->Title}}</td>
                <td>25-01-2020</td>
                <td>14:00</td>
                <td>yemecen</td>
                <td>Satın Alma</td>
                <td>Fikri</td>
                <td><span class="badge badge-info">Normal</span></td>
                <td><span class="badge badge-secondary">Açık</span></td>
            </tr> 
        @endforeach  
    </tbody>
  </table>
@endsection