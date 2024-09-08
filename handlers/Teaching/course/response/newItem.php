<?php
function Teaching_course_response_newItem ($params) {
	$request = array_merge($_REQUEST, $params);
	Q_Valid::requireFields(array("publisherId"), $request);
	$publisherId = Q::ifset($request, "publisherId", null);
	$category = Q::ifset($request, "category", null);
	$stream = Teaching_Course::getComposerStream($publisherId, $category);
	return array("publisherId" => $stream->publisherId, "streamName" => $stream->name);
}