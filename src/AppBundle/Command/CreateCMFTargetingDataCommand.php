<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace AppBundle\Command;



use Pimcore\Http\Response\CodeInjector;
use Pimcore\Model\Tool\Targeting\Rule;

class CreateCMFTargetingDataCommand extends CreateTargetingDataCommand
{

    protected function configure()
    {
        $this
            ->setName('demo-advanced:create-cmf-targeting-data')
            ->setDescription('Creates targeting test data with combination with CMF. Run "demo-advanced:create-targeting-data" first.');
    }


    protected $customerSegments = [
        [
            'groupReference' => 'CustomerType',
            'groupName' => 'Customer Type',
            'segmentReference' => 'New Customer',
            'segmentName' => 'New Customer',
            'targetGroup' => 'new-customer',
            'calculated' => true
        ],
        [
            'groupReference' => 'CustomerType',
            'groupName' => 'Customer Type',
            'segmentReference' => 'Regular Customer',
            'segmentName' => 'Regular Customer',
            'targetGroup' => 'regular-customer',
            'calculated' => true
        ],
        [
            'groupReference' => 'CustomerType',
            'groupName' => 'Customer Type',
            'segmentReference' => 'VIP Customer',
            'segmentName' => 'VIP Customer',
            'targetGroup' => 'vip-customer',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Basketball',
            'segmentName' => 'Basketball',
            'targetGroup' => 'basketball',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Football',
            'segmentName' => 'Football',
            'targetGroup' => 'football',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Handball',
            'segmentName' => 'Handball',
            'targetGroup' => 'handball',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Outdoor',
            'segmentName' => 'Outdoor',
            'targetGroup' => 'outdoor',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Running',
            'segmentName' => 'Running',
            'targetGroup' => 'running',
            'calculated' => true
        ],
        [
            'groupReference' => 'InterestCategories',
            'groupName' => 'Interest Categories',
            'segmentReference' => 'Volleyball',
            'segmentName' => 'Volleyball',
            'targetGroup' => 'volleyball',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Technical',
            'segmentName' => 'Technical',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Productmodel',
            'segmentName' => 'Productmodel',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Filter Definitions',
            'segmentName' => 'Filter Definitions',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Marketing',
            'segmentName' => 'Marketing',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Cross-Selling',
            'segmentName' => 'Cross-Selling',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Targeting-Groups',
            'segmentName' => 'Targeting-Groups',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Output',
            'segmentName' => 'Output',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Vouchers',
            'segmentName' => 'Vouchers',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Backoffice',
            'segmentName' => 'Backoffice',
            'calculated' => true
        ],
        [
            'groupReference' => 'DetailInterests',
            'groupName' => 'Detail Interests',
            'segmentReference' => 'Tenants',
            'segmentName' => 'Tenants',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => 'at least once',
            'segmentName' => 'at least once',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => '2 times',
            'segmentName' => '2 times',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => '3 times',
            'segmentName' => '3 times',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => '4 times',
            'segmentName' => '4 times',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => '5 times',
            'segmentName' => '5 times',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitorCount',
            'groupName' => 'Visitor Count',
            'segmentReference' => '10 times',
            'segmentName' => '10 times',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingCountry',
            'groupName' => 'Visiting Country',
            'segmentReference' => 'Austria',
            'segmentName' => 'Austria',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingCountry',
            'groupName' => 'Visiting Country',
            'segmentReference' => 'Germany',
            'segmentName' => 'Germany',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingLanguage',
            'groupName' => 'Visiting Language',
            'segmentReference' => 'German',
            'segmentName' => 'German',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingLanguage',
            'groupName' => 'Visiting Language',
            'segmentReference' => 'English',
            'segmentName' => 'English',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingDevice',
            'groupName' => 'Visiting Device',
            'segmentReference' => 'Mobile',
            'segmentName' => 'Mobile',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingDevice',
            'groupName' => 'Visiting Device',
            'segmentReference' => 'Desktop',
            'segmentName' => 'Desktop',
            'calculated' => true
        ],
        [
            'groupReference' => 'VisitingDevice',
            'groupName' => 'Visiting Device',
            'segmentReference' => 'Tablet',
            'segmentName' => 'Tablet',
            'calculated' => true
        ]
    ];

    protected $documentSegmentAssignment = [
        [
            'document' => '/en/special-functions',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'technical']
            ]
        ],[
            'document' => '/en/special-functions/productmodel',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Productmodel']
            ]
        ],[
            'document' => '/en/special-functions/filterdefinitions',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Filter Definitions']
            ]
        ],[
            'document' => '/en/special-functions/marketing-and-pricing-rules',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Marketing']
            ]
        ],[
            'document' => '/en/special-functions/cross-selling',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Cross-Selling']
            ]
        ],[
            'document' => '/en/special-functions/targeting-groups',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Targeting-Groups']
            ]
        ],[
            'document' => '/en/special-functions/outputchannels-for-attributes',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Output']
            ]
        ],[
            'document' => '/en/special-functions/vouchers',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Vouchers']
            ]
        ],[
            'document' => '/en/special-functions/backoffice',
            'segments' => [
                ['group' => 'DetailInterests', 'calculated' => true, 'segment' => 'Backoffice']
            ]
        ]
    ];


    protected $moreRules = [

        'profiling_vip-customer' => [
            'scope'      => Rule::SCOPE_VISITOR,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/checkout/completed#',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'target_group',
                    'targetGroup'  => 'regular-customer',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
//                ],
//                [
//                    'type'         => 'cmf_has_segment',
//                    'condition_operator' => '>=',
//                    'value' => 1,
//                    'considerCustomerSegments' => true,
//                    'considerTrackedSegments' => true,
//                    'segment'  => '/customermanagement/segments/calculated/CustomerType/VIP Customer',
//                    'operator'     => 'or',
//                    'bracketLeft'  => false,
//                    'bracketRight' => true
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'vip-customer',
                    'weight'      => 3,
                    'assignSegment' => 'assign_consider_weight',
                    'trackActivity' => true
                ]
            ]
        ],

        'profiling_regular-customer' => [
            'scope'      => Rule::SCOPE_VISITOR,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/checkout/completed#',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'target_group',
                    'targetGroup'  => 'new-customer',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
//                ],
//                [
//                    'type'         => 'cmf_has_segment',
//                    'condition_operator' => '>=',
//                    'value' => 1,
//                    'considerCustomerSegments' => true,
//                    'considerTrackedSegments' => true,
//                    'segment'  => '/customermanagement/segments/calculated/CustomerType/Regular Customer',
//                    'operator'     => 'or',
//                    'bracketLeft'  => false,
//                    'bracketRight' => true
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'regular-customer',
                    'weight'      => 2,
                    'assignSegment' => 'assign_consider_weight',
                    'trackActivity' => true
                ]
            ]
        ],

        'profiling_new-customer' => [
            'scope'      => Rule::SCOPE_VISITOR,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/checkout/completed#',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
//                ],
//                [
//                    'type'         => 'cmf_has_segment',
//                    'condition_operator' => '>=',
//                    'value' => 1,
//                    'considerCustomerSegments' => true,
//                    'considerTrackedSegments' => true,
//                    'segment'  => '/customermanagement/segments/calculated/CustomerType/New Customer',
//                    'operator'     => 'or',
//                    'bracketLeft'  => false,
//                    'bracketRight' => false
                ]

            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'new-customer',
                    'weight'      => 1,
                    'assignSegment' => 'assign_consider_weight',
                    'trackActivity' => true
                ]
            ]
        ],

        'init_target_groups' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_apply_target_groups_from_segments',
                    'targetGroup' => ['new-customer', 'regular-customer', 'vip-customer'],
                    'applyType'   => 'cleanup_and_overwrite'


                ],
                [
                    'type'        => 'cmf_apply_target_groups_from_segments',
                    'targetGroup' => ['basketball', 'football', 'handball', 'outdoor', 'running', 'volleyball', 'technical-guy'],
                    'applyType'   => 'cleanup_and_merge'
                ]
            ]
        ],

        'profiling_outdoor' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Outdoor\~c\d+#',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'timeonsite',
                    'hours'        => 0,
                    'minutes'      => 0,
                    'seconds'      => 10,
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment' => '/customermanagement/segments/calculated/InterestCategories/Outdoor'
                ]
            ]
        ],

        'profiling_running' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Running\~c\d+#',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'timeonsite',
                    'hours'        => 0,
                    'minutes'      => 0,
                    'seconds'      => 10,
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment' => '/customermanagement/segments/calculated/InterestCategories/Running'
                ]
            ]
        ],
        'profiling_device-mobile' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'hardwareplatform',
                    'platform'     => 'mobile',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'     => 'codesnippet',
                    'selector' => CodeInjector::SELECTOR_HEAD,
                    'position' => CodeInjector::POSITION_END,
                    'code'     =>
                        '
<style type="text/css">
header.jumbotron {
    background: red !important;
}
</style>
'
                ],
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitingDevice/Mobile'
                ]
            ]
        ],

        'profiling_track-visit' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/at least once'
                ]
            ]
        ],

        'profiling_track-visit-2-times' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '>=',
                    'value' => 2,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/VisitorCount/at least once',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/2 times'
                ]
            ]
        ],

        'profiling_track-visit-3-times' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '>=',
                    'value' => 2,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/VisitorCount/2 times',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/3 times'
                ]
            ]
        ],

        'profiling_track-visit-4-times' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '>=',
                    'value' => 2,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/VisitorCount/3 times',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/4 times'
                ]
            ]
        ],

        'profiling_track-visit-5-times' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '>=',
                    'value' => 2,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/VisitorCount/4 times',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/5 times'
                ]
            ]
        ],

        'profiling_track-visit-10-times' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'cmf_customer_is_loggedin',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '>=',
                    'value' => 10,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/VisitorCount/at least once',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'cmf_track_segment',
                    'segment'     => '/customermanagement/segments/calculated/VisitorCount/10 times'
                ]
            ]
        ],

        'profiling_outdoor-apply-targetgroup' => [
            'scope'      => Rule::SCOPE_SESSION_WITH_VARIABLES,
            'conditions' => [
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '%',
                    'value' => 5,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/InterestCategories/Outdoor',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'outdoor',
                    'weight'      => 1,
                    'assignSegment' => 'assign_consider_weight',
                    'trackActivity' => true
                ]
            ]
        ],

        'profiling_running-apply-targetgroup' => [
            'scope'      => Rule::SCOPE_SESSION_WITH_VARIABLES,
            'conditions' => [
                [
                    'type'         => 'cmf_has_segment',
                    'condition_operator' => '%',
                    'value' => 5,
                    'considerCustomerSegments' => true,
                    'considerTrackedSegments' => true,
                    'segment'  => '/customermanagement/segments/calculated/InterestCategories/Running',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'running',
                    'weight'      => 1,
                    'assignSegment' => 'assign_consider_weight',
                    'trackActivity' => true
                ]
            ]
        ]

    ];


    protected function getRules()
    {
        return array_merge(parent::getRules(), $this->moreRules);
    }

}