@extends('substances.layout')

@section('content')
    <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav">
            <li><a href="{!!URL::to('/substances/not-active')!!}">ДЕАКТИВИРАНИ СУБСТАНЦИИ</a></li>
        </ul>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th >№ </th>
            <th >ID</th>
            <th >Име</th>
            <th >Страна</th>
            {{--<th >Бр. Пр</th>--}}
        </tr>
        </thead>
        <tbody>
        <?php $n = 1; ?>
        @foreach($substances as $substance)
            <?php
                if ($substance['isActive'] === 1) {
                    $classNotActive = 'notActive';
                } else {
                    $classNotActive = '';
                }
            ?>
            <tr class="<?php echo $classNotActive; ?>" >
                <td>{!! $n++ !!}</td>
                <td><span class="bold">{{$firm['id']}}</span></td>
                <td>{{$substance['name']}}</td>
                <td>{{$substance['country']}}</td>
                {{--<td>{{count($firm['pesticides'])}}</td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection