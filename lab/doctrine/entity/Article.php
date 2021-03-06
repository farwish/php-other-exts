<?php

/**
 * 如果不使用 Table 描述，默认表名将使用类名。
 *
 * Basic Mapping:
 * @doc http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html
 *
 * Column 拥有的属性：type, name, length, unique, nullable, precision, scale, columnDefinition, options
 * 属性 type 支持的映射：string, integer, smallint, bigint, boolean, decimal, date, time, datetime, datetimetz, text, object, array, simple_array, json_array, float, guid, blob
 * 自定义 type 类型的映射：http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/cookbook/custom-mapping-types.html
 * 使用类型为 DateTime 时：http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/cookbook/working-with-datetime.html
 * 每个实体类必须有一个主键, with Id annotation; 自增id使用 GeneratedValue 的默认策略 AUTO.
 * id 生成策略有：AUTO， SEQUENCE， IDENTITY， UUID， TABLE， NONE， CUSTOM
 *
 * `php ../../vendor/bin/doctrine orm:info`
 *
 * @Entity
 * @Table(name="article")
 */
class Article
{
    /**
	 * @Id
     * @Column(type="integer")
	 * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=255)
     */
    private $title;

    /**
     * @Column(type="string", length=3000)
     */
    private $content;

    /**
     * @Column(type="string", length=30)
     */
    private $author;

    /**
     * createTime property map to the create_time column with the datetime type.
     *
     * @Column(type="datetime", name="create_time")
     */
    private $createTime;

    /**
     * updateTime property map to the update_time column with the datetime type.
     *
     * @Column(type="datetime", name="update_time")
     */
    private $updateTime;

	/**
	 * @ManyToOne(targetEntity="Category")
	 * @JoinColumn(name="category_id", referencedColumnName="id")
	 */
	private $category;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set author.
     *
     * @param string $author
     *
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set createTime.
     *
     * @param \DateTime $createTime
     *
     * @return Article
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime.
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime.
     *
     * @param \DateTime $updateTime
     *
     * @return Article
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set category.
     *
     * @param \Category|null $category
     *
     * @return Article
     */
    public function setCategory(\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}
