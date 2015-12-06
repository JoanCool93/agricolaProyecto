@extends('layouts.principal')

@section('content')
<div class="conteiner">
	<div class="padding-content">
		<div align="center">
    	    <table width="900" height="62" border="0" align="center" cellpadding="12" cellspacing="12" class="box">
    	    	<tr>
    	    		<td><h2>Por Especie:</h2></td>
    	    		<hr>
    	    		@foreach($especie as $especie)

    	    		@endforeach
    	    	</tr>
    	    	<tr>
    	    		<td>Por Región</td>
    	    		@foreach($especie as $especie)
    	    		@endforeach
    	    	</tr>
    	    </table>
    	</div>
	</div>
</div>
@endsection