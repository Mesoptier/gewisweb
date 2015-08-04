<?php

namespace Decision\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meeting document model.
 *
 * @ORM\Entity
 */
class MeetingDocument
{

    /**
     * Document id.
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * Meeting.
     *
     * @ORM\ManyToOne(targetEntity="Meeting", inversedBy="documents")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="meeting_type", referencedColumnName="type"),
     *  @ORM\JoinColumn(name="meeting_number", referencedColumnName="number")
     * })
     */
    protected $meeting;

    /**
     * Meeting number.
     *
     * @ORM\Column(type="integer")
     */
    protected $number;

    /**
     * Path of the document, relative to the storage directory.
     *
     * @ORM\Column(type="string")
     */
    protected $path;

    /**
     * Get the document id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the meeting.
     *
     * @return Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * Set the meeting.
     *
     * @param Meeting $meeting
     */
    public function setMeeting($meeting)
    {
        $this->meeting = $meeting;
    }

    /**
     * Get the path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the path.
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

}
