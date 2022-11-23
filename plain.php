$Pagelist->config(array(        
    'type' => 'children',
    'sort' => Str::def(Parse::query('sort'), 'date desc')
));
