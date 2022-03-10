@extends('layout.app')
@section('content')

<div>
    <h1>Hello World</h1>
    <table>
        <tr><td>{{ $h }}</td></tr>
    </table>
    <html-separator/>
    <table>
        <tr><td>{{ $h }}</td></tr>
    </table>
    <html-separator/>
</div>

@endsection