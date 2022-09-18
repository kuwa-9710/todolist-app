{{-- task page --}}
<x-layout title="Top">
    <x-tasks.title>"What should I do today?"</x-tasks.title>
    <x-tasks.form.put></x-tasks.form.put>
    <x-tasks.task-list :tasks="$tasks"></x-tasks.task-list>
</x-layout>
