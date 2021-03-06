@extends('layouts.app') @section('content')
	<div class="container">
		<div class="row">
			<single-question-manager :question_id="{{$question}}">
				<answer-manager slot="answers" :enableUpdates="false" :question_id="{{$question}}"></answer-manager>
			</single-question-manager>
		</div>
	</div>
@endsection