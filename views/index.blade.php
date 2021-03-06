@extends('layouts.master')
@section('styles')
    @parent
    <style>
        .button-container {
            padding: 30px;
        }
        .button{
            width:400px; /*same as the height*/
            height:400px; /*same as the width*/
            display: block;
            margin: 0 auto;
            /*
            background-color:#ff0000;
            */
            background-color: #58aa00;
            border:1px solid #58aa00; /*same colour as the background*/
            color:#fff;

            font-size:500%;
            text-align: center;
            text-shadow: 2px 2px #555;

            /*set the border-radius at half the size of the width and height*/
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            /*give the button a small drop shadow*/
            -webkit-box-shadow: 0 0 10px rgba(0,0,0, .75);
            -moz-box-shadow: 0 0 10px rgba(0,0,0, .75);
            box-shadow: 2px 2px 15px rgba(0,0,0, .75);
        }
        .button:hover{
            background:#490;
            border:1px solid #490;
            /*reduce the size of the shadow to give a pushed effect*/
            -webkit-box-shadow: 0px 0px 5px rgba(0,0,0, .75);
            -moz-box-shadow: 0px 0px 5px rgba(0,0,0, .75);
            box-shadow: 0px 0px 5px rgba(0,0,0, .75);
        }
        .button:focus {
            outline: none;
            box-shadow: none;
        }

    </style>
@stop


@section('content')
    <div class="button-container">
        <input class="button" onClick="StartPlaylist();" type="submit" value="Start" />
    </div>
@stop