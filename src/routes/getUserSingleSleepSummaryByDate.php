<?php
$app->post('/api/HumanAPI/getUserSingleSleepSummaryByDate', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'sleepSummaryDate']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $post_data['args']['sleepSummaryDate'] = explode(' ', $post_data['args']['sleepSummaryDate'])[0];

    $query_str = $settings['api_url'] . 'activities/summaries/' . $post_data['args']['sleepSummaryDate'];
    $params = [
        'access_token' => 'accessToken'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});