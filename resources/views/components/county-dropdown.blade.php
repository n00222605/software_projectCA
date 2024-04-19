<!-- resources/views/components/county-dropdown.blade.php -->

@props(['counties', 'field' => '', 'selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($counties as $county)
        <option value="{{ $county }}" {{ $selected == $county ? 'selected' : '' }}>
            {{ $county }}
        </option>
    @endforeach
</select>
