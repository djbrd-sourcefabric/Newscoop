<?php

namespace Newscoop\Entity\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NewscoopEntityCommentProxy extends \Newscoop\Entity\Comment implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function setId($p_id)
    {
        $this->__load();
        return parent::setId($p_id);
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getArticleNumber()
    {
        $this->__load();
        return parent::getArticleNumber();
    }

    public function setTimeCreated(\DateTime $p_datetime)
    {
        $this->__load();
        return parent::setTimeCreated($p_datetime);
    }

    public function getTimeCreated()
    {
        $this->__load();
        return parent::getTimeCreated();
    }

    public function setTimeUpdated(\DateTime $p_datetime)
    {
        $this->__load();
        return parent::setTimeUpdated($p_datetime);
    }

    public function getTimeUpdated()
    {
        $this->__load();
        return parent::getTimeUpdated();
    }

    public function setSubject($p_subject)
    {
        $this->__load();
        return parent::setSubject($p_subject);
    }

    public function getSubject()
    {
        $this->__load();
        return parent::getSubject();
    }

    public function setMessage($p_message)
    {
        $this->__load();
        return parent::setMessage($p_message);
    }

    public function getMessage()
    {
        $this->__load();
        return parent::getMessage();
    }

    public function setIp($p_ip)
    {
        $this->__load();
        return parent::setIp($p_ip);
    }

    public function getIp()
    {
        $this->__load();
        return parent::getIp();
    }

    public function setRecommended($p_recommended)
    {
        $this->__load();
        return parent::setRecommended($p_recommended);
    }

    public function getRecommended()
    {
        $this->__load();
        return parent::getRecommended();
    }

    public function setCommenter(\Newscoop\Entity\Comment\Commenter $p_commenter)
    {
        $this->__load();
        return parent::setCommenter($p_commenter);
    }

    public function getCommenter()
    {
        $this->__load();
        return parent::getCommenter();
    }

    public function getCommenterName()
    {
        $this->__load();
        return parent::getCommenterName();
    }

    public function getCommenterEmail()
    {
        $this->__load();
        return parent::getCommenterEmail();
    }

    public function setStatus($p_status)
    {
        $this->__load();
        return parent::setStatus($p_status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setForum(\Newscoop\Entity\Publication $p_forum)
    {
        $this->__load();
        return parent::setForum($p_forum);
    }

    public function getForum()
    {
        $this->__load();
        return parent::getForum();
    }

    public function setThread(\Newscoop\Entity\Article $p_thread)
    {
        $this->__load();
        return parent::setThread($p_thread);
    }

    public function getThread()
    {
        $this->__load();
        return parent::getThread();
    }

    public function setThreadLevel($p_level)
    {
        $this->__load();
        return parent::setThreadLevel($p_level);
    }

    public function getThreadLevel()
    {
        $this->__load();
        return parent::getThreadLevel();
    }

    public function setThreadOrder($p_order)
    {
        $this->__load();
        return parent::setThreadOrder($p_order);
    }

    public function getThreadOrder()
    {
        $this->__load();
        return parent::getThreadOrder();
    }

    public function setLanguage(\Newscoop\Entity\Language $p_language)
    {
        $this->__load();
        return parent::setLanguage($p_language);
    }

    public function getLanguage()
    {
        $this->__load();
        return parent::getLanguage();
    }

    public function setParent(\Newscoop\Entity\Comment $p_parent = NULL)
    {
        $this->__load();
        return parent::setParent($p_parent);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function getLikes()
    {
        $this->__load();
        return parent::getLikes();
    }

    public function getDislikes()
    {
        $this->__load();
        return parent::getDislikes();
    }

    public function getRealName()
    {
        $this->__load();
        return parent::getRealName();
    }

    public function SameAs($p_comment)
    {
        $this->__load();
        return parent::SameAs($p_comment);
    }

    public function exists()
    {
        $this->__load();
        return parent::exists();
    }

    public function getProperty($p_key)
    {
        $this->__load();
        return parent::getProperty($p_key);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'commenter', 'forum', 'parent', 'article_num', 'thread', 'language', 'subject', 'message', 'thread_level', 'thread_order', 'status', 'ip', 'time_created', 'likes', 'dislikes', 'recommended');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}