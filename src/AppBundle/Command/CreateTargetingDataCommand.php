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

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\Document;
use Pimcore\Model\Tool\Targeting\Rule;
use Pimcore\Model\Tool\Targeting\TargetGroup;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateTargetingDataCommand extends AbstractCommand
{
    private $targetGroups = [
        'new customer'     => ['threshold' => 1],
        'regular customer' => ['threshold' => 1],
        'vip customer'     => ['threshold' => 1],
        'basketball'       => ['threshold' => 5],
        'football'         => ['threshold' => 5],
        'handball'         => ['threshold' => 5],
        'outdoor'          => ['threshold' => 5],
        'running'          => ['threshold' => 5],
        'volleyball'       => ['threshold' => 5],
        'technical guy'    => ['threshold' => 3],
        'male'             => ['threshold' => 5],
        'female'           => ['threshold' => 5],
        'blue-lover'       => ['threshold' => 3],
    ];

    private $documentTargetGroups = [
        '/en/landingpages/landingpage'         => ['female', 'football'],
        '/en/landingpages/landingpage-2'       => ['male', 'outdoor'],
        '/en/special-functions/tenantswitches' => ['technical guy'],
    ];

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
    }

    private function createTargetGroups()
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

    private function assignDocumentTargetGroups()
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

    private function createRules()
    {
        $this->io->section('Targeting Rules');

        $deviceMobileCode = <<<'EOF'
<script type="text/javascript">
$(document).ready(function() {
    $('header.jumbotron').attr('style', 'background: red');
});
</script>
EOF;

        $rules = [
            'new-customer' => [
                'scope'      => Rule::SCOPE_VISITOR,
                'conditions' => [
                    [
                        'type'         => 'url',
                        'url'          => '#(en/de)/checkout/completed#',
                        'operator'     => 'and',
                        'bracketLeft'  => false,
                        'bracketRight' => false
                    ],
                ],
                'actions'    => [
                    [
                        'type'        => 'assign_target_group',
                        'targetGroup' => TargetGroup::getByName('new customer')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'regular-customer' => [
                'scope'      => Rule::SCOPE_VISITOR,
                'conditions' => [
                    [
                        'type'         => 'url',
                        'url'          => '#(en/de)/checkout/completed#',
                        'operator'     => 'and',
                        'bracketLeft'  => false,
                        'bracketRight' => false
                    ],
                    [
                        'type'         => 'target_group',
                        'target_group' => TargetGroup::getByName('new customer')->getId(),
                        'operator'     => 'and',
                        'bracketLeft'  => false,
                        'bracketRight' => false
                    ]
                ],
                'actions'    => [
                    [
                        'type'        => 'assign_target_group',
                        'targetGroup' => TargetGroup::getByName('regular customer')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'vip-customer' => [
                'scope'      => Rule::SCOPE_VISITOR,
                'conditions' => [
                    [
                        'type'         => 'url',
                        'url'          => '#(en/de)/checkout/completed#',
                        'operator'     => 'and',
                        'bracketLeft'  => false,
                        'bracketRight' => false
                    ],
                    [
                        'type'         => 'target_group',
                        'target_group' => TargetGroup::getByName('regular customer')->getId(),
                        'operator'     => 'and',
                        'bracketLeft'  => false,
                        'bracketRight' => false
                    ]
                ],
                'actions'    => [
                    [
                        'type'        => 'assign_target_group',
                        'targetGroup' => TargetGroup::getByName('vip customer')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'basketball' => [
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
                        'targetGroup' => TargetGroup::getByName('basketball')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'football' => [
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
                        'targetGroup' => TargetGroup::getByName('football')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'handball' => [
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
                        'targetGroup' => TargetGroup::getByName('handball')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'outdoor' => [
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
                        'targetGroup' => TargetGroup::getByName('outdoor')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'running' => [
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
                        'targetGroup' => TargetGroup::getByName('running')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'volleyball' => [
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
                        'targetGroup' => TargetGroup::getByName('volleyball')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'technical-guy' => [
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
                    'type'        => 'assign_target_group',
                    'targetGroup' => TargetGroup::getByName('technical guy')->getId(),
                    'weight'      => 1,
                ]
            ],

            'male' => [
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
                        'targetGroup' => TargetGroup::getByName('male')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'female' => [
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
                        'targetGroup' => TargetGroup::getByName('female')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'blue-lover' => [
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
                        'targetGroup' => TargetGroup::getByName('blue-lover')->getId(),
                        'weight'      => 1,
                    ]
                ]
            ],

            'device-mobile' => [
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
                        'code'     => $deviceMobileCode,
                        'selector' => 'head',
                        'position' => 'end',
                    ]
                ]
            ],

            'redirect-to-landingpage' => [
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

        foreach ($rules as $name => $data) {
            $rule = Rule::getByName($name);

            if (null === $rule) {
                $this->io->writeln(sprintf('Creating rule <info>%s</info>', $name));

                $rule = new Rule();
                $rule->setName($name);
            } else {
                $this->io->writeln(sprintf('Updating rule <info>%s</info>', $name));
            }

            $rule->setActive(true);
            $rule->setScope($data['scope']);
            $rule->setConditions($data['conditions']);
            $rule->setActions($data['actions']);
            $rule->save();
        }
    }
}
