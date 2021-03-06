<?php namespace Sanatorium\Analytics\Widgets;

use Widget;

class DashboardVisitors {

    /**
     * Name that will appear in dashboard manager
     */
    const NAME = 'Analytics: Visitors & pageviews';

    /**
     * Show wrapper around this widget
     */
    const HAS_WRAPPER = true;

    /**
     * Widget configuration on dashboard
     * @var array
     */
    public $configuration = [
        'previous' => [
            'label' => 'Show previous',
            'type' => 'boolean',
        ]
    ];
    
    public function run()
    {
        // @todo: load configuration values
        $days = 7;
        $previous = true;
        
        return Widget::make('sanatorium/analytics::visitors.getVisitorsAndPageViews', compact('days', 'previous'));
    }
    
}
