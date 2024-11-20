<table
    {{ $attributes->merge(['class' => 'min-w-full table-auto']) }}
>
    <thead {{ $attributes->merge(['class' => 'bg-teal-600 text-white']) }}>
        {{ $tableHead }}
    </thead>
    <tbody {{ $tableBody->attributes }}>
        {{ $tableBody }}
    </tbody>
</table>
