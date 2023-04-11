<h1>Todo Details</h1>
<h2>{{ $todo -> task }}</h2>
<h2>{{ $todo -> completed == 1 ? 'Task Completed.' : 'UnCompleted.' }}</h2>