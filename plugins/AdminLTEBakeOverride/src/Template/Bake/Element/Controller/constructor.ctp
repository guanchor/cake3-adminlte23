
    /**
     * Constructor.
     *
     * Add some properties
     */
    public function __construct(Request $request = null, Response $response = null)
    {
        parent::__construct($request, $response);

        $this->displayName = __('<%= $currentModelName %>');
        $this->modelDisplayName = __('<%= $singularName %>');
        $this->modelPrefixedDisplayName = __('The <%= $singularName %>');
    }
