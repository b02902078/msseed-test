<?php
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
	
include_once 'taskmodel.php';

function getItems()
{
  $items = getAllItems();
  return $items;
}

function getResources()
{
  $items = getAllResources();
  return $items;
}

function getGroupResources($team)
{
  $items = getGroupAllResources($team);
  return $items;
}

function getMessages()
{
  $items = getAllMessages();
  return $items;
}

function getStrongholds()
{
  $items = getAllStrongholds();
  return $items;
}

function getOccupyTeam($code)
{
// Get occupying team
  $team = getOneOccupyTeam($code);
  echo $team[0][0];

// Return Chinese team name
  /*if ($team[0][0] == 'A') { return "美洲"; }
  else if ($team[0][0] == 'B') { return "歐洲"; }
  else if ($team[0][0] == 'C') { return "亞洲"; }
  else if ($team[0][0] == 'D') { return "非洲"; }
  else { return "無" }*/
}

function getMissions()
{
  $items = getAllMissions();
  return $items;
}

function getTimes()
{
  $items = getAllTimes();
  return $items;
}

function getDay()
{
  $items = getAllDay();
  return $items;
}

function prepareResource()
{
  prepareResources();
}

function prepareStronghold()
{
  prepareStrongholds();
}


?>