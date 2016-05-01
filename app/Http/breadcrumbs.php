<?php
Breadcrumbs::register('cores_learning', function ($breadcrumbs) {
  $breadcrumbs->push('Cursos', route('dashboard.learning'));
});
Breadcrumbs::register('core_learning', function ($breadcrumbs, $core) {
  $breadcrumbs->parent('cores_learning');
  $breadcrumbs->push($core->name, route('learning.core.show', $core->slug));
});
Breadcrumbs::register('lesson_learning', function ($breadcrumbs, $core, $lesson) {
  $breadcrumbs->parent('core_learning', $core);
  $breadcrumbs->push($lesson->title, route('learning.lesson.show', $lesson->slug));
});