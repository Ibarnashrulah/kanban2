<div class="task-progress-column">
  <div class="task-progress-column-heading">
    <h2>{{ $title }}</h2>
      <!-- Adding Task -->
      <form
            action="{{ route('tasks.create') }}">
                <button class="task-list-button">
                     <span class="material-icons">add</span>
                </button>
      </form>
  </div>
  <div>
    @foreach ($tasks as $task)
      @include('partials.task_card', [
        'task' => $task,
        'leftStatus' => $leftStatus,
        'rightStatus' => $rightStatus,
      ])
    @endforeach
  </div>
</div>