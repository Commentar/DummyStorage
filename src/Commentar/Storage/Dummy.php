<?php
/**
 * Dummy data storage class
 *
 * This class supplies dummy data for testing and designing purposes
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Storage;

use Commentar\Storage\Mechanism;

/**
 * Dummy data storage class
 *
 * @category   Commentar
 * @package    Storage
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Dummy implements Mechanism
{
    /**
     * Gets the comments based on the post/page id formatted as tree
     *
     * @param int|string $id The id of which to get the comments for
     *
     * @return array List of all the comments
     */
    public function getTree($id)
    {
        return [
            1 => [
                'id' => 1,
                'user' => [
                    'id' => 1,
                    'username' => 'PeeHaa',
                    'email' => 'peehaa@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'First post! Yeah from the UNIX epoch try to beat this!',
                'timestamp' => new \DateTime('@0'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
            2 => [
                'id' => 2,
                'user' => [
                    'id' => 1,
                    'username' => 'PeeHaa',
                    'email' => 'peehaa@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, orci porttitor dictum varius, eros nulla varius nisi, eu suscipit nisl erat vel nisi. Etiam justo velit, rutrum sed orci quis, tempus condimentum nisl. Ut vitae volutpat tortor, non eleifend quam. Cras nec imperdiet quam. Sed mattis pulvinar nisl, ut dignissim nulla blandit et. Ut aliquam, nulla sed aliquet fringilla, odio massa euismod leo, tristique rutrum urna enim eu odio. Etiam sagittis lacus felis, eu condimentum massa fermentum vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas euismod ligula tellus, sit amet facilisis risus dapibus id. Integer massa mi, interdum porttitor viverra eget, tincidunt ut ipsum. Suspendisse mauris est, consequat nec fringilla in, pretium at est.',
                'timestamp' => new \DateTime('2013-08-26 22:35:19'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [
                    4 => [
                        'id' => 4,
                        'user' => [
                            'id' => 2,
                            'username' => 'Zundrium',
                            'email' => 'Zundrium@commentar.com',
                            'hellbanned' => false,
                        ],
                        'parent' => 2,
                        'content' => 'Praesent sed iaculis felis, quis pulvinar est. Duis dignissim, risus vel venenatis euismod, purus ipsum blandit metus, ut rhoncus dolor tellus eu dui. Quisque eget tellus vehicula, gravida nibh ut, euismod neque. Nunc eget ornare orci, in consectetur tellus. Donec rhoncus libero a luctus imperdiet. In placerat a odio at mattis. Nam molestie aliquet rhoncus. Curabitur accumsan iaculis hendrerit. Vestibulum scelerisque felis eget placerat congue. Nulla vulputate interdum lacus, nec iaculis lacus ultrices nec. Suspendisse vulputate aliquet felis, a hendrerit risus rutrum a.',
                        'timestamp' => new \DateTime('2013-08-26 23:41:31'),
                        'reviewed' => true,
                        'moderated' => false,
                        'score' => mt_rand(-100, 100),
                        'children' => [],
                    ],
                    5 => [
                        'id' => 5,
                        'user' => [
                            'id' => 3,
                            'username' => 'Troll',
                            'email' => 'troll@yahoo-answers.com',
                            'hellbanned' => true,
                        ],
                        'parent' => 2,
                        'content' => 'Imma troll. WATCH SOCCER ONLINE FOR FREE! MY MOM MADE 1000000 EAUORS JUST FROM WORKING AT HOME!!!',
                        'timestamp' => new \DateTime('2013-09-26 22:35:19'),
                        'reviewed' => true,
                        'moderated' => false,
                        'score' => mt_rand(-100, 100),
                        'children' => [],
                    ],
                ],
            ],
            3 => [
                'id' => 3,
                'user' => [
                    'id' => 2,
                    'username' => 'Zundrium',
                    'email' => 'Zundrium@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'Aliquam placerat ipsum justo, quis sodales augue laoreet id. Duis tristique erat vitae neque posuere egestas. Nunc egestas sagittis nunc sit amet lobortis. Nunc leo lacus, convallis et lacinia ut, feugiat sed neque. Nulla condimentum pretium vehicula. Pellentesque posuere ante nisl, vitae scelerisque lorem ultricies non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam scelerisque, purus sed lacinia vulputate, urna est cursus elit, in consequat ligula augue in neque. Cras euismod dapibus placerat. Proin nisl arcu, congue sit amet nisi sed, vestibulum auctor nisi. Donec non odio in elit viverra sagittis. In tincidunt at purus eget vestibulum. Morbi ultricies sollicitudin dui, a faucibus eros aliquet eget. Phasellus lacinia venenatis justo vel scelerisque. Sed bibendum ante leo, ac pellentesque felis vehicula ut.',
                'timestamp' => new \DateTime('2013-10-01 01:12:28'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
        ];
    }

    /**
     * Gets the comments based on the post/page id formatted as sorted list
     *
     * @param int|string $id The id of which to get the comments for
     *
     * @return array List of all the comments
     */
    public function getBest($id)
    {
        $comments = [
            1 => [
                'id' => 1,
                'user' => [
                    'id' => 1,
                    'username' => 'PeeHaa',
                    'email' => 'peehaa@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'First post! Yeah from the UNIX epoch try to beat this!',
                'timestamp' => new \DateTime('@0'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
            2 => [
                'id' => 2,
                'user' => [
                    'id' => 1,
                    'username' => 'PeeHaa',
                    'email' => 'peehaa@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, orci porttitor dictum varius, eros nulla varius nisi, eu suscipit nisl erat vel nisi. Etiam justo velit, rutrum sed orci quis, tempus condimentum nisl. Ut vitae volutpat tortor, non eleifend quam. Cras nec imperdiet quam. Sed mattis pulvinar nisl, ut dignissim nulla blandit et. Ut aliquam, nulla sed aliquet fringilla, odio massa euismod leo, tristique rutrum urna enim eu odio. Etiam sagittis lacus felis, eu condimentum massa fermentum vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas euismod ligula tellus, sit amet facilisis risus dapibus id. Integer massa mi, interdum porttitor viverra eget, tincidunt ut ipsum. Suspendisse mauris est, consequat nec fringilla in, pretium at est.',
                'timestamp' => new \DateTime('2013-08-26 22:35:19'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
            3 => [
                'id' => 3,
                'user' => [
                    'id' => 2,
                    'username' => 'Zundrium',
                    'email' => 'Zundrium@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => null,
                'content' => 'Aliquam placerat ipsum justo, quis sodales augue laoreet id. Duis tristique erat vitae neque posuere egestas. Nunc egestas sagittis nunc sit amet lobortis. Nunc leo lacus, convallis et lacinia ut, feugiat sed neque. Nulla condimentum pretium vehicula. Pellentesque posuere ante nisl, vitae scelerisque lorem ultricies non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam scelerisque, purus sed lacinia vulputate, urna est cursus elit, in consequat ligula augue in neque. Cras euismod dapibus placerat. Proin nisl arcu, congue sit amet nisi sed, vestibulum auctor nisi. Donec non odio in elit viverra sagittis. In tincidunt at purus eget vestibulum. Morbi ultricies sollicitudin dui, a faucibus eros aliquet eget. Phasellus lacinia venenatis justo vel scelerisque. Sed bibendum ante leo, ac pellentesque felis vehicula ut.',
                'timestamp' => new \DateTime('2013-10-01 01:12:28'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
            4 => [
                'id' => 4,
                'user' => [
                    'id' => 2,
                    'username' => 'Zundrium',
                    'email' => 'Zundrium@commentar.com',
                    'hellbanned' => false,
                ],
                'parent' => 2,
                'content' => 'Praesent sed iaculis felis, quis pulvinar est. Duis dignissim, risus vel venenatis euismod, purus ipsum blandit metus, ut rhoncus dolor tellus eu dui. Quisque eget tellus vehicula, gravida nibh ut, euismod neque. Nunc eget ornare orci, in consectetur tellus. Donec rhoncus libero a luctus imperdiet. In placerat a odio at mattis. Nam molestie aliquet rhoncus. Curabitur accumsan iaculis hendrerit. Vestibulum scelerisque felis eget placerat congue. Nulla vulputate interdum lacus, nec iaculis lacus ultrices nec. Suspendisse vulputate aliquet felis, a hendrerit risus rutrum a.',
                'timestamp' => new \DateTime('2013-08-26 23:41:31'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
            5 => [
                'id' => 5,
                'user' => [
                    'id' => 3,
                    'username' => 'Troll',
                    'email' => 'troll@yahoo-answers.com',
                    'hellbanned' => true,
                ],
                'parent' => 2,
                'content' => 'Imma troll. WATCH SOCCER ONLINE FOR FREE! MY MOM MADE 1000000 EAUORS JUST FROM WORKING AT HOME!!!',
                'timestamp' => new \DateTime('2013-09-26 22:35:19'),
                'reviewed' => true,
                'moderated' => false,
                'score' => mt_rand(-100, 100),
                'children' => [],
            ],
        ];

        usort($comments, function($a, $b) {
            return $b['score'] - $a['score'];
        });

        return $comments;
    }
}
