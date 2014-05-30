<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Plugin\Company\Repository;

use WellCommerce\Plugin\Company\Model\CompanyDataInterface;

/**
 * Interface CompanyRepositoryInterface
 *
 * @package WellCommerce\Plugin\Company\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface CompanyRepositoryInterface
{
    const PRE_DELETE_EVENT  = 'company.repository.pre_delete';
    const POST_DELETE_EVENT = 'company.repository.post_delete';
    const PRE_SAVE_EVENT    = 'company.repository.pre_save';
    const POST_SAVE_EVENT   = 'company.repository.post_save';

    /**
     * Returns all companies as a collection
     *
     * @return mixed
     */
    public function all();

    /**
     * Returns single company model
     *
     * @param $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * Saves new or existing company model
     *
     * @param array $data
     * @param null  $id
     *
     * @return mixed
     */
    public function save(array $data, $id = null);

    /**
     * Deletes company model
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * Returns all companies as a key-value pairs
     *
     * @return mixed
     */
    public function getAllCompanyToSelect();

    /**
     * Returns a tree containing companies as a root items and bound shops as a children
     *
     * @return mixed
     */
    public function getShopsTree();
} 