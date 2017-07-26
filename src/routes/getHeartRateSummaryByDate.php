<?php
$app->post('/api/HumanAPI/getHeartRateSummaryByDate', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'hrSummaryDate']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $post_data['args']['hrSummaryDate'] = explode(' ', $post_data['args']['hrSummaryDate'])[0];

    $query_str = $settings['api_url'] . 'heart_rate/summaries/' . $post_data['args']['hrSummaryDate'];
    $params = [
        'access_token' => 'accessToken'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});