<?php

return [
    1 => [
        'name' => 'Product QA Workflow',                                    // display name, is shown at workflow window in pimcore admin
        'id' => 1,                                                          // unique (!!!) workflow management ID
        'workflowSubject' => [                                              // defines for which elements the workflow is for
            'types' => ['object'],                                          // the type of element that this workflow is for (asset|object|document)
            'classes' => [12],                                              // the class id's that this workflow applies to, defaults to NONE, (Objects only)
            'objectTypes' => ['object']                                     // the type of objects to support (i.e. object or variant) (Objects Only)
        ],
        'enabled' => true,                                                  // flag to enable / disable to workflow
        'defaultState' => 'open',                                          // the default state that all new objects are given (Must be in this workflow)
        'defaultStatus' => 'todo',                                         // the default status that all new objects are given (Must be in this workflow)
        'allowUnpublished'=> true,                                         // true to allow workflow on unpublished objects, false to only allow published
        // if set to true, elements are set to unpublished on state transition if not configured otherwise is statuses definition

        //state definitions, these are high level statuses for separating out statuses
        'states' => [
            [
                'name' => 'open',                                           // the name of the state
                'label' => 'Open',                                          // the label of the state
                'color' => '#3572b0'                                        // UI colour / theme
            ],
            [
                'name' => 'in_progress',
                'label' => 'In Progress',
                'color' => '#ff9933'
            ],
            [
                'name' => 'done',
                'label' => 'Done',
                'color' => '#009900'
            ]
        ],

        //status definitions
        'statuses' => [
            [
                'name' => 'todo',                                         // the name of the status (UNIQUE to workflow)
                'label' => 'To Do'                                        // a friendly label for the status
            ],
            [
                'name' => 'reopened',
                'label' => 'Re-opened'
            ],
            [
                'name' => 'in_progress',
                'label' => 'In Progress'
            ],
            [
                'name' => 'in_review',
                'label'=> 'In Review',
                'objectLayout' => 1                                        // objectLayout the editor loads by default (objects only)
            ],
            [
                'name' => 'done',
                'label' => 'Done',
                'objectLayout' => 2,
                'elementPublished' => true                                 // the element gets published in this step (objects and PageSnippets only)
            ]

        ],

        //actions definitions, the things that can be done to objects
        'actions' => [

            [
                'name' => 'start_progress',                                 // the action name (UNIQUE to workflow)
                'label' => 'Start Progress',                                // action label
                'transitionTo' => [                                        // the options after this action has happened
                    'in_progress' => [                                      // define the states followed by their status
                        'in_progress'
                    ]
                ],
                'notes' => [
                    'required' => false,                                     // disable / enable notes to be optional
                    'type'     => 'Worklog',                                 // an optional alternative "type" to the note, defaults to "Status update" or "Global action" if blank
                    'title'    => 'Progress Started'                         // an optional alternative "title" to the note, if blank he actions transition result is used (See Decorator).
                ],
                'users' => [8],                                             // add user-ids or role-ids that are allowed this action - admin always is allowed for everything
                /*"events" => [
                    "before" => ['\\Website\\WorkflowExampleEventHandler', 'before'],                                         // class and method to call before this action is performed (false will throw an error)
                    "success" => ['\\Website\\WorkflowExampleEventHandler', 'success'],                                        // class and method to call on success
                    "failure" => ['\\Website\\WorkflowExampleEventHandler', 'failure']                                         // class and method to call on failure
                ],*/
                //"notificationUsers" => []
            ],

            [
                'name' => 'stop_progress',
                'label' => 'Stop Progress',
                'transitionTo' => [
                    'open' => [
                        'todo'
                    ]
                ],
                'notes' => [
                    'required' => true
                ]
            ],

            [
                'name' =>'mark_as_in_review',
                'label' => 'Send for Review',
                'transitionTo' => [
                    'in_progress' => [
                        'in_review'
                    ]
                ],
                'notes' => [
                    'required' => true
                ]
            ],

            [
                'name' =>'mark_as_done',
                'label' => 'Mark as Done',
                'transitionTo' => [
                    'done' => [
                        'done'
                    ]
                ],
                'notes' => [
                    'required' => true
                ]
            ],

            [
                'name' => 'reopen_issue',
                'label' => 'Reopen Issue',
                'transitionTo' => [
                    'open' => [
                        'reopened'
                    ]
                ],
                'notes' => [
                    'required' => true
                ]
            ],

            [
                'name' => 'add_to_todo',
                'label' => 'Mark as To Do',
                'transitionTo' => [
                    'open' => [
                        'todo'
                    ]
                ]
            ],

            [
                'name' => 'log_time',
                'label' => 'Log Time',
                'notes' => [
                    'required' => true,
                    'type' => 'Worklog',
                    'title' => 'Time Logged'
                ],
                'additionalFields' => [
                    [
                        'name'=> 'timeWorked',
                        'fieldType'=> 'input',
                        'title'=> 'Time spent',
                        'blankText'=> '30m',
                        'required'=> true,
                        'setterFn'=> null
                    ],

                    // define the note date through the special noteDate name (see #743)
                    // this will set the note datetime to the selected value instead of the datetime the action
                    // was executed
                    [
                        'name'=> 'noteDate',
                        'fieldType' => 'datetime',
                        'title' => 'Date of Conversation',
                        'required' => true
                    ]
                ]
            ]

        ],

        'transitionDefinitions' => [

            'todo'=> [                                  // the starting status
                'validActions' => [                    // valid actions that can be done at that status
                    'start_progress'=> null,
                    'mark_as_in_review'=> null
                ]
            ],
            'reopened'=> [
                'validActions' => [
                    'start_progress'=> null,
                    'mark_as_in_review'=> null
                ]
            ],
            'in_progress'=> [
                'validActions' => [
                    'mark_as_in_review'=> null,
                    'stop_progress'=> null
                ]
            ],
            'done'=> [
                'validActions' => [
                    'reopen_issue'=> null
                ]
            ],
            'in_review'=> [
                'validActions' => [
                    'reopen_issue'=> null,
                    'mark_as_done'=> null
                ]
            ],

            // actions that can happen at any point
            'globalActions' => [
                'log_time' => null
            ]

        ],

    ]
];
