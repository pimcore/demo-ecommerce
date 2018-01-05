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

use CustomerManagementFrameworkBundle\SegmentAssignment\SegmentAssigner\SegmentAssignerInterface;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use Pimcore\Cache\Core\CoreHandlerInterface;
use Pimcore\Console\AbstractCommand;
use Pimcore\Http\Response\CodeInjector;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Targeting\TargetingDocumentInterface;
use Pimcore\Model\Tool\Targeting\Rule;
use Pimcore\Model\Tool\Targeting\TargetGroup;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateTargetingDataCommand extends AbstractCommand
{
    protected $targetGroups = [
        'new-customer'      => ['threshold' => 1],
        'regular-customer'  => ['threshold' => 1],
        'vip-customer'      => ['threshold' => 1],
        'basketball'        => ['threshold' => 5],
        'football'          => ['threshold' => 5],
        'handball'          => ['threshold' => 5],
        'outdoor'           => ['threshold' => 5],
        'running'           => ['threshold' => 5],
        'volleyball'        => ['threshold' => 5],
        'technical-guy'     => ['threshold' => 3],
        'male-interested'   => ['threshold' => 5],
        'female-interested' => ['threshold' => 5],
        'blue-lover'        => ['threshold' => 3],
    ];

    protected $documentTargetGroups = [
        '/en/landingpages/landingpage'         => ['female-interested', 'football'],
        '/en/landingpages/landingpage-2'       => ['male-interested', 'outdoor'],
        '/en/special-functions/tenantswitches' => ['technical-guy'],
    ];

    protected $rules = [
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
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'vip-customer',
                    'weight'      => 3,
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
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'regular-customer',
                    'weight'      => 2,
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
                ],
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'new-customer',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_basketball' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Basketball\~c\d+#',
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'basketball',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_football' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Football\~c\d+#',
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'football',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_handball' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Handball\~c\d+#',
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'handball',
                    'weight'      => 1,
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'outdoor',
                    'weight'      => 1,
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'running',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_volleyball' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'url',
                    'url'          => '#/en/shop/Volleyball\~c\d+#',
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'volleyball',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_technical-guy' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'type'         => 'country',
                    'country'      => 'AT',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'geopoint',
                    'longitude'    => 13.055010000000038,
                    'latitude'     => 47.813179066305864,
                    'radius'       => 34,
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'browser',
                    'browser'      => 'chrome',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'hardwareplatform',
                    'platform'     => 'all',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'operatingsystem',
                    'system'       => 'all',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'timeonsite',
                    'hours'        => 0,
                    'minutes'      => 2,
                    'seconds'      => 0,
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'technical-guy',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_male' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'url'          => '#gender%5B%5D=m#',
                    'type'         => 'url',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'male-interested',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_female' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'url'          => '#gender%5B%5D=w#',
                    'type'         => 'url',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'female-interested',
                    'weight'      => 1,
                ]
            ]
        ],

        'profiling_blue-lover' => [
            'scope'      => Rule::SCOPE_HIT,
            'conditions' => [
                [
                    'url'          => '#color=blue#',
                    'type'         => 'url',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type'        => 'assign_target_group',
                    'targetGroup' => 'blue-lover',
                    'weight'      => 1,
                ]
            ]
        ],

        'personalize_device-mobile' => [
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
                ]
            ]
        ],

        'personalize_redirect-to-landingpage' => [
            'scope'      => Rule::SCOPE_SESSION,
            'conditions' => [
                [
                    'type'         => 'language',
                    'language'     => 'de',
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ],
                [
                    'type'         => 'visitedpagesbefore',
                    'number'       => 5,
                    'operator'     => 'and',
                    'bracketLeft'  => false,
                    'bracketRight' => false
                ]
            ],
            'actions'    => [
                [
                    'type' => 'redirect',
                    'url'  => '/en/landingpages/landingpage',
                ]
            ]
        ],
    ];

    protected $personalizedContent = [
        [
            'document'    => '/en',
            'targetGroup' => 'basketball',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'filter'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Basketball Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to basketball customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'football',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'cog'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Football Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to football customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'handball',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'asterisk'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Handball Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to handball customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'outdoor',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'sunglasses'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Outdoor Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to outdoor customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'running',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'forward'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Running Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to running customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'volleyball',
            'elements'    => [
                'content:6.icon_0'  => [
                    'type' => 'select',
                    'data' => 'tint'
                ],
                'content:6.title_0' => [
                    'type' => 'input',
                    'data' => 'Volleyball Content'
                ],
                'content:6.text_0'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to volleyball customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'male-interested',
            'elements'    => [
                'content:6.icon_2'  => [
                    'type' => 'select',
                    'data' => 'user'
                ],
                'content:6.title_2' => [
                    'type' => 'input',
                    'data' => 'Male Content'
                ],
                'content:6.text_2'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to male customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'female-interested',
            'elements'    => [
                'content:6.icon_2'  => [
                    'type' => 'select',
                    'data' => 'eye-open'
                ],
                'content:6.title_2' => [
                    'type' => 'input',
                    'data' => 'Female Content'
                ],
                'content:6.text_2'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to female customers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'blue-lover',
            'elements'    => [
                'content:6.icon_1'  => [
                    'type' => 'select',
                    'data' => 'heart-empty'
                ],
                'content:6.title_1' => [
                    'type' => 'input',
                    'data' => 'Blue Content'
                ],
                'content:6.text_1'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to blue lovers.'
                ],
            ]
        ],
        [
            'document'    => '/en',
            'targetGroup' => 'technical-guy',
            'elements'    => [
                'content:6.icon_1'  => [
                    'type' => 'select',
                    'data' => 'wrench'
                ],
                'content:6.title_1' => [
                    'type' => 'input',
                    'data' => 'Technical Content'
                ],
                'content:6.text_1'  => [
                    'type' => 'textarea',
                    'data' => 'This content is specially targeted to technical people.'
                ],
            ]
        ],
        [
            'document'    => '/en/shared/includes/footer',
            'targetGroup' => 'male-interested',
            'elements'    => [
                'footer_content' => [
                    'type' => 'input',
                    'data' => 'Hello male customer!'
                ],
            ]
        ],
        [
            'document'    => '/en/shared/includes/footer',
            'targetGroup' => 'female-interested',
            'elements'    => [
                'footer_content' => [
                    'type' => 'input',
                    'data' => 'Hello female customer!'
                ],
            ]
        ],
        [
            'document'    => '/en/shared/includes/footer',
            'targetGroup' => 'new-customer',
            'elements'    => [
                'footer_content' => [
                    'type' => 'input',
                    'data' => 'Welcome as new customer!'
                ],
            ]
        ],
        [
            'document'    => '/en/shared/includes/footer',
            'targetGroup' => 'regular-customer',
            'elements'    => [
                'footer_content' => [
                    'type' => 'input',
                    'data' => 'Welcome back as regular customer!'
                ],
            ]
        ],
        [
            'document'    => '/en/shared/includes/footer',
            'targetGroup' => 'vip-customer',
            'elements'    => [
                'footer_content' => [
                    'type' => 'input',
                    'data' => 'VIP customers rule!'
                ],
            ]
        ],
    ];


    protected $customerSegments = [
    ];

    protected $documentSegmentAssignment = [

    ];

    /**
     * @var TargetGroup[]
     */
    private $targetGroupCache = [];

    protected function configure()
    {
        $this
            ->setName('demo-advanced:create-targeting-data')
            ->setDescription('Creates targeting test data');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->createTargetGroups();
        $this->assignDocumentTargetGroups();
        $this->createRules();
        $this->createPersonalizedData();
        $this->createCustomerSegments();
        $this->createSegmentAssignment();

        $this->io->comment('Clearing cache');

        $cache = $this->getContainer()->get(CoreHandlerInterface::class);
        $cache->clearAll();

        $this->io->success('All done');
    }

    protected function createTargetGroups()
    {
        $this->io->section('Target Groups');

        foreach ($this->targetGroups as $name => $data) {
            $targetGroup = TargetGroup::getByName($name);

            if (null === $targetGroup) {
                $this->io->writeln(sprintf('Creating target group <info>%s</info>', $name));

                $targetGroup = new TargetGroup();
                $targetGroup->setName($name);
            } else {
                $this->io->writeln(sprintf('Updating target group <info>%s</info>', $name));
            }

            $targetGroup->setThreshold($data['threshold']);
            $targetGroup->save();
        }
    }

    protected function assignDocumentTargetGroups()
    {
        $this->io->section('Document Target Group Assignments');

        foreach ($this->documentTargetGroups as $path => $targetGroupNames) {
            $this->io->writeln(sprintf(
                'Assigning target groups <comment>%s</comment> to document <info>%s</info>',
                implode(', ', $targetGroupNames),
                $path
            ));

            $document = Document::getByPath($path);

            $targetGroups = array_map(function (string $targetGroupName) {
                return TargetGroup::getByName($targetGroupName);
            }, $targetGroupNames);

            $targetGroups = array_filter($targetGroups);

            $document->setTargetGroups($targetGroups);
            $document->save();
        }
    }

    protected function getRules() {
        return $this->rules;
    }

    protected function createRules()
    {
        $this->io->section('Targeting Rules');


        $prio = 1;
        foreach ($this->getRules() as $name => $data) {
            $rule = Rule::getByName($name);

            if (null === $rule) {
                $this->io->writeln(sprintf('Creating rule <info>%s</info>', $name));

                $rule = new Rule();
                $rule->setName($name);
            } else {
                $this->io->writeln(sprintf('Updating rule <info>%s</info>', $name));
            }

            $rule->setActive(true);
            $rule->setPrio($prio++);
            $rule->setScope($data['scope']);
            $rule->setConditions($this->replaceTargetGroupsWithIDs($data['conditions']));
            $rule->setActions($this->replaceTargetGroupsWithIDs($data['actions']));
            $rule->save();
        }
    }

    protected function replaceTargetGroupsWithIDs($configArray) {
        foreach($configArray as &$config) {
            if($config['targetGroup']) {
                $config['targetGroup'] = $this->targetGroupId($config['targetGroup']);
            }
        }
        return $configArray;
    }

    protected function createPersonalizedData()
    {
        $this->io->section('Personalized Content');

        $db = $this->getContainer()->get('database_connection');

        $query = <<<'EOF'
INSERT INTO documents_elements
    (documentId, name, type, data)
VALUES
    (:documentId, :name, :type, :data)
ON DUPLICATE KEY UPDATE
    type = VALUES(type), data = VALUES(data);
EOF;

        $stmt = $db->prepare($query);

        foreach ($this->personalizedContent as $documentData) {
            $document = Document::getByPath($documentData['document']);

            if (!$document || !$document instanceof TargetingDocumentInterface) {
                throw new \InvalidArgumentException(sprintf('Document "%s" does is invalid', $documentData['document']));
            }

            /** @var TargetGroup $targetGroup */
            $targetGroup = $this->targetGroup($documentData['targetGroup']);

            $this->io->writeln(sprintf(
                'Creating personalized content for target group <comment>%s</comment> on document <comment>%s</comment>',
                $targetGroup->getName(),
                $document->getRealFullPath()
            ));

            $document->setUseTargetGroup($targetGroup->getId());

            $db->beginTransaction();

            try {
                foreach ($documentData['elements'] as $elementName => $elementData) {
                    $stmt->execute([
                        'documentId' => $document->getId(),
                        'name'       => $document->getTargetGroupElementName($elementName),
                        'type'       => $elementData['type'],
                        'data'       => $elementData['data'],
                    ]);
                }

                $db->commit();
            } catch (\Throwable $e) {
                $db->rollBack();

                $this->io->error(sprintf('Failed to update document %s', $document->getRealFullPath()));
            }
        }
    }

    protected function createCustomerSegments() {

        $this->io->section('Customer Segments');

        $segmentManager = $this->getContainer()->get(SegmentManagerInterface::class);


        foreach($this->customerSegments as $segmentConfig) {

            $this->io->writeln(sprintf(
                'Creating customer segment <comment>%s</comment>', $segmentConfig['segmentReference']
            ));

            $segmentGroup = $segmentManager->getSegmentGroupByReference($segmentConfig['groupReference'], $segmentConfig['calculated']);
            if(!$segmentGroup) {
                $segmentGroup = $segmentManager->createSegmentGroup($segmentConfig['groupName'], $segmentConfig['groupReference'] ,$segmentConfig['calculated']);
                $segmentGroup->save();
            }

            $segment = $segmentManager->getSegmentByReference($segmentConfig['segmentReference'], $segmentGroup, $segmentConfig['calcualted']);
            if(!$segment) {
                $segment = $segmentManager->createSegment($segmentConfig['segmentName'], $segmentGroup, $segmentConfig['segmentReference'], $segmentConfig['calculated']);
                $segment->save();
            }

            if($segmentConfig['targetGroup']) {

                $targetGroup = $this->targetGroup($segmentConfig['targetGroup']);
                $segment->setTargetGroup($targetGroup->getId());
                $segment->save();
                $segment->setUseAsTargetGroup(true);
                $segment->save();
            }
        }

    }

    protected function createSegmentAssignment() {

        $this->io->section('Segment Assignment');

        $segmentAssigner = $this->getContainer()->get(SegmentAssignerInterface::class);

        $segmentManager = $this->getContainer()->get(SegmentManagerInterface::class);

        foreach($this->documentSegmentAssignment as $segmentAssignmentConfig) {

            $this->io->writeln(sprintf(
                'Assigning customer segments to <comment>%s</comment>', $segmentAssignmentConfig['document']
            ));


            $document = Document::getByPath($segmentAssignmentConfig['document']);

            $segments = [];
            foreach($segmentAssignmentConfig['segments'] as $segmentConfig) {

                $segmentGroup = $segmentManager->getSegmentGroupByReference($segmentConfig['group'], $segmentConfig['calculated']);
                $segments[] = $segmentManager->getSegmentByReference($segmentConfig['segment'], $segmentGroup, $segmentConfig['calculated']);
            }

            $segmentAssigner->assign($document, false, $segments);
        }

    }

    protected function targetGroup(string $name): TargetGroup
    {
        if (isset($this->targetGroupCache[$name])) {
            return $this->targetGroupCache[$name];
        }

        $targetGroup = TargetGroup::getByName($name);
        if (null === $targetGroup) {
            throw new \InvalidArgumentException(sprintf('Target Group "%s" does not exist', $name));
        }

        $this->targetGroupCache[$name] = $targetGroup;

        return $targetGroup;
    }

    protected function targetGroupId($name)
    {

        if(is_array($name)) {
            $targetGroupIds = [];

            foreach($name as $targetGroupName) {
                $targetGroupIds[] = $this->targetGroup($targetGroupName)->getId();
            }

            return $targetGroupIds;

        } else {
            return $this->targetGroup($name)->getId();
        }

    }
}

