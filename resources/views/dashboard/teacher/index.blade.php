<x-layouts.teacher-dashboard>
    <div class="grid grid-flow-col grid-cols-4 gap-8">
        @if ($grade)
            <x-mary-stat :value="$grade" icon="o-academic-cap" title="Grado asignado" />
        @else
            <x-mary-stat icon="o-academic-cap" title="No tiene grado asignado" />
        @endif

        <x-mary-stat description="This month" icon="o-arrow-trending-up" title="Sales" value="22.124" />

        <x-mary-stat description="This month" icon="o-arrow-trending-down" title="Lost" value="34" />

        <x-mary-stat class="text-orange-500" color="text-pink-500" description="This month" icon="o-arrow-trending-down"
                     title="Sales" value="22.124" />
    </div>
</x-layouts.teacher-dashboard>
