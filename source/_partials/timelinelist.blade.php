<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="heading{{ $id }}">
    <div class="icon">
      <span class="glyphicon glyphicon-one-fine-dot" aria-hidden="true"></span>
      <span class="sr-only">Expand/Collapse</span>
    </div>
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $id }}" aria-expanded="true" aria-controls="collapse{{ $id }}">{{ $heading }}</a>
    </h4>
  </div>
  <div id="collapse{{ $id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{ $id }}">
    <div class="panel-body">
      @if($img)
      <div class="photoholder">
        <img src="{{ $img }}" />
      </div> @endif

      <p>{{ $desc }}</p>
    </div>
  </div>
</div>