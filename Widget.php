<?php

class Widget 
{
	private $header;
	private $output;
	private $collapsible = true;
	private $sortable = true;
	private $defaultPosition = 1;


	public function __construct($header, $output = "", $position = 1, $sortable = true, $collapsible = true)
	{
		$this->setHeader($header);
		$this->setOutput($output);
		$this->setSortable($sortable);
		$this->setCollapsible($collapsible);
		$this->setPosition($position);
	}

	public function setPosition($position)
	{
		$this->position = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function setHeader($header)
	{
		$this->header = $header;
	}

	public function setOutput($output)
	{
		$this->output = $output;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function getOutput()
	{
		return $this->output;
	}

	public function setCollapsible($collapsible)
	{
		$this->collapsible = $collapsible;
	}

	public function setSortable($sortable)
	{
		$this->sortable = $sortable;
	}
	public function isCollapsible()
	{
		return $this->collapsible;
	}

	public function isSortable()
	{
		return $this->sortable;
	}

}