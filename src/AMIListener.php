<?php

require_once dirname(__FILE__) . '/../PAMI/Message/Event/EventMessage.php';
require_once dirname(__FILE__) . '/../PAMI/Listener/IEventListener.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/DialEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/DialBeginEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/DialEndEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/HangupEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/NewstateEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/NewextenEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/NewchannelEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/NewCalleridEvent.php';
require_once dirname(__FILE__) . '/../PAMI/Message/Event/NewstateEvent.php';

class AMIListener implements IEventListener
{
	public function handle(EventMessage $event)
	{
		return $this->dispatchEvent($event);

		if ($event instanceof NewchannelEvent && $event->getChannelStateDesc() == 'Ring')
		{
			$this->dispatchIncomingCall($event);
		}
		if ($event instanceof DialEvent && $event->getSubEvent() == 'Begin')
		{
			$this->dispatchDial($event);
		}
		if ($event instanceof NewCalleridEvent)
		{
			$this->dispatchAnsweredCall($event);
		}
		if ($event instanceof DialEvent && $event->getSubEvent() == 'End')
		{
			$this->dispatchHangup($event);
		}
	}

	public function dispatchEvent($event)
	{
		echo $event->getRawContent() . "\n\n\n\n";
	}

	public function dispatchIncomingCall($event)
	{
		echo "Incoming call from " . $event->getCallerIDNum() . " " . $event->getCallerIDName() ."\n\n";
	}
	public function dispatchAnsweredCall($event)
	{
		echo "Caller : " . $event->getCallerIDNum() . "\n\n";
	}

	public function dispatchDial($event)
	{
		echo $event->getCallerIDName() . " is calling " . $event->getDialstring() . "\n\n";
	}
	public function dispatchHangup($event)
	{
		if (!$event->getDialString())
		{
			echo $event->getRawContent();
		}
		else
		{
			echo $event->getDialString() . " hungup… \n\n";
		}
	}
}
