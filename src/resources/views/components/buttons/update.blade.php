@if($options['actions']['update'])
    <a href="{{ (null == $options['route']['update'] ? route($options['route']['default'] . '.edit', $collection['id']) : $options['route']['update'] . '/' . $collection['id'] . '/edit') }}"
       class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i> Edit</a>
@endif