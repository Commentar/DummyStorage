<?php
/**
 * Comment storage for the dummy storage mechanism
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Storage\Dummy;

use Commentar\Storage\Datamapper\CommentMappable;
use Commentar\DomainObject\Comment as CommentDomainObject;
use Commentar\Storage\InvalidStorageException;

/**
 * Comment storage for the dummy storage mechanism
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Comment implements CommentMappable
{
    /**
     * Creates the storage file
     *
     * @param mixed $id The id
     */
    public function createStore($id)
    {
    }

    /**
     * Fetches all comments based on the post id
     *
     * @param mixed $postId The id of the post of which to fetch the comments
     *
     * @return array List of all the comments on the post
     */
    public function fetchByPostId($id)
    {
        if ($id != 1) {
            throw new InvalidStorageException(
                'Could not access the comment storage file (`' . $storageLocation . '`)'
            );
        }

        return [
            1 => [
                'id' => 1,
                'postId' => 1,
                'userId' => 1,
                'parent' => null,
                'content' => 'First post! Yeah from the UNIX epoch try to beat this!',
                'timestamp' => new \DateTime('@0'),
                'updated' => new \DateTime(),
                'score' => mt_rand(-50, 100),
                'isReviewed' => true,
                'isModerated' => false,
            ],
            2 => [
                'id' => 2,
                'postId' => 1,
                'userId' => 1,
                'parent' => null,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, orci porttitor dictum varius, eros nulla varius nisi, eu suscipit nisl erat vel nisi. Etiam justo velit, rutrum sed orci quis, tempus condimentum nisl. Ut vitae volutpat tortor, non eleifend quam. Cras nec imperdiet quam. Sed mattis pulvinar nisl, ut dignissim nulla blandit et. Ut aliquam, nulla sed aliquet fringilla, odio massa euismod leo, tristique rutrum urna enim eu odio. Etiam sagittis lacus felis, eu condimentum massa fermentum vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas euismod ligula tellus, sit amet facilisis risus dapibus id. Integer massa mi, interdum porttitor viverra eget, tincidunt ut ipsum. Suspendisse mauris est, consequat nec fringilla in, pretium at est.',
                'timestamp' => new \DateTime('2013-09-21 00:00:00'),
                'updated' => null,
                'score' => mt_rand(-50, 100),
                'isReviewed' => true,
                'isModerated' => false,
            ],
            3 => [
                'id' => 3,
                'postId' => 1,
                'userId' => 2,
                'parent' => 2,
                'content' => 'Praesent sed iaculis felis, quis pulvinar est. Duis dignissim, risus vel venenatis euismod, purus ipsum blandit metus, ut rhoncus dolor tellus eu dui. Quisque eget tellus vehicula, gravida nibh ut, euismod neque. Nunc eget ornare orci, in consectetur tellus. Donec rhoncus libero a luctus imperdiet. In placerat a odio at mattis. Nam molestie aliquet rhoncus. Curabitur accumsan iaculis hendrerit. Vestibulum scelerisque felis eget placerat congue. Nulla vulputate interdum lacus, nec iaculis lacus ultrices nec. Suspendisse vulputate aliquet felis, a hendrerit risus rutrum a.',
                'timestamp' => new \DateTime('2013-09-22 12:12:12'),
                'updated' => null,
                'score' => mt_rand(-50, 100),
                'isReviewed' => true,
                'isModerated' => false,
            ],
            4 => [
                'id' => 4,
                'postId' => 1,
                'userId' => 3,
                'parent' => 2,
                'content' => 'Imma troll. WATCH SOCCER ONLINE FOR FREE! MY MOM MADE 1000000 EAUORS JUST FROM WORKING AT HOME!!!',
                'timestamp' => new \DateTime('2013-09-22 13:13:13'),
                'updated' => null,
                'score' => mt_rand(-50, 100),
                'isReviewed' => true,
                'isModerated' => false,
            ],
            5 => [
                'id' => 5,
                'postId' => 1,
                'userId' => 2,
                'parent' => null,
                'content' => 'Aliquam placerat ipsum justo, quis sodales augue laoreet id. Duis tristique erat vitae neque posuere egestas. Nunc egestas sagittis nunc sit amet lobortis. Nunc leo lacus, convallis et lacinia ut, feugiat sed neque. Nulla condimentum pretium vehicula. Pellentesque posuere ante nisl, vitae scelerisque lorem ultricies non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam scelerisque, purus sed lacinia vulputate, urna est cursus elit, in consequat ligula augue in neque. Cras euismod dapibus placerat. Proin nisl arcu, congue sit amet nisi sed, vestibulum auctor nisi. Donec non odio in elit viverra sagittis. In tincidunt at purus eget vestibulum. Morbi ultricies sollicitudin dui, a faucibus eros aliquet eget. Phasellus lacinia venenatis justo vel scelerisque. Sed bibendum ante leo, ac pellentesque felis vehicula ut.',
                'timestamp' => new \DateTime('2013-09-28 13:13:13'),
                'updated' => null,
                'score' => mt_rand(-50, 100),
                'isReviewed' => true,
                'isModerated' => false,
            ],
        ];
    }

    /**
     * Persists the data of the comment in the storage file
     *
     * @param \Commentar\DomainObject\Comment $comment The comment to store
     */
    public function persist(CommentDomainObject $comment)
    {
    }
}
