<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/bath' => [[['_route' => 'app_bath_index', '_controller' => 'App\\Controller\\BathController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bath/new' => [[['_route' => 'app_bath_new', '_controller' => 'App\\Controller\\BathController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/horaire' => [[['_route' => 'app_horaire_index', '_controller' => 'App\\Controller\\HoraireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/horaire/new' => [[['_route' => 'app_horaire_new', '_controller' => 'App\\Controller\\HoraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lead' => [[['_route' => 'app_lead_index', '_controller' => 'App\\Controller\\LeadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lead/leads' => [[['_route' => 'app_lead_index_leads', '_controller' => 'App\\Controller\\LeadController::leads'], null, ['GET' => 0], null, false, false, null]],
        '/lead/historique' => [[['_route' => 'app_lead_index_historique', '_controller' => 'App\\Controller\\LeadController::historique'], null, ['GET' => 0], null, false, false, null]],
        '/lead/user' => [[['_route' => 'app_lead_index_user', '_controller' => 'App\\Controller\\LeadController::user'], null, ['GET' => 0], null, false, false, null]],
        '/lead/historique/user' => [[['_route' => 'app_lead_index_historique_user', '_controller' => 'App\\Controller\\LeadController::historique_user'], null, ['GET' => 0], null, false, false, null]],
        '/lead/lead/change-status-all' => [[['_route' => 'app_lead_change_status_all', '_controller' => 'App\\Controller\\LeadController::changeStatusAll'], null, ['POST' => 0], null, false, false, null]],
        '/lead/upload' => [[['_route' => 'upload_excel', '_controller' => 'App\\Controller\\LeadController::upload'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lead/new' => [[['_route' => 'app_lead_new', '_controller' => 'App\\Controller\\LeadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/planning' => [[['_route' => 'app_planning_index', '_controller' => 'App\\Controller\\PlanningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/planning/planning' => [[['_route' => 'app_planning_index_planning', '_controller' => 'App\\Controller\\PlanningController::planning'], null, ['GET' => 0], null, false, false, null]],
        '/planning/new' => [[['_route' => 'app_planning_new', '_controller' => 'App\\Controller\\PlanningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/planning/planning_part' => [[['_route' => 'app_planning_part', '_controller' => 'App\\Controller\\PlanningController::planning_part'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 1], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/bath/([^/]++)(?'
                    .'|(*:219)'
                    .'|/edit(*:232)'
                    .'|(*:240)'
                .')'
                .'|/horaire/([^/]++)(?'
                    .'|(*:269)'
                    .'|/edit(*:282)'
                    .'|(*:290)'
                .')'
                .'|/lead/(?'
                    .'|([^/]++)(?'
                        .'|/edit(?'
                            .'|\\-inline(?'
                                .'|(*:338)'
                                .'|\\-(?'
                                    .'|user(?'
                                        .'|(*:358)'
                                        .'|\\-2(*:369)'
                                    .')'
                                    .'|historique(*:388)'
                                .')'
                            .')'
                            .'|(*:398)'
                        .')'
                        .'|(*:407)'
                    .')'
                    .'|bulk\\-delete(*:428)'
                    .'|delete(?'
                        .'|_total(*:451)'
                        .'|\\-all(*:464)'
                    .')'
                .')'
                .'|/planning/(?'
                    .'|([^/]++)/edit\\-inline\\-user(*:514)'
                    .'|newlead/([^/]++)(*:538)'
                    .'|lead/([^/]++)(*:559)'
                    .'|([^/]++)(?'
                        .'|(*:578)'
                        .'|/edit(?'
                            .'|\\-inline\\-planning(*:612)'
                            .'|planning(*:628)'
                            .'|(*:636)'
                        .')'
                        .'|(*:645)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'app_bath_show', '_controller' => 'App\\Controller\\BathController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_bath_edit', '_controller' => 'App\\Controller\\BathController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_bath_delete', '_controller' => 'App\\Controller\\BathController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_horaire_show', '_controller' => 'App\\Controller\\HoraireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_horaire_edit', '_controller' => 'App\\Controller\\HoraireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_horaire_delete', '_controller' => 'App\\Controller\\HoraireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_lead_edit_inline', '_controller' => 'App\\Controller\\LeadController::editInline'], ['id'], ['POST' => 0], null, false, false, null]],
        358 => [[['_route' => 'app_lead_edit_inline_user', '_controller' => 'App\\Controller\\LeadController::editInlinUser'], ['id'], ['POST' => 0], null, false, false, null]],
        369 => [[['_route' => 'app_lead_edit_inline_user_2', '_controller' => 'App\\Controller\\LeadController::editInlinUser2'], ['id'], ['POST' => 0], null, false, false, null]],
        388 => [[['_route' => 'app_lead_edit_inline_historique', '_controller' => 'App\\Controller\\LeadController::editInlinHistorique'], ['id'], ['POST' => 0], null, false, false, null]],
        398 => [[['_route' => 'app_lead_edit', '_controller' => 'App\\Controller\\LeadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [
            [['_route' => 'app_lead_show', '_controller' => 'App\\Controller\\LeadController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_lead_delete', '_controller' => 'App\\Controller\\LeadController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        428 => [[['_route' => 'app_lead_bulk_delete', '_controller' => 'App\\Controller\\LeadController::bulkDelete'], [], ['POST' => 0], null, false, false, null]],
        451 => [[['_route' => 'app_lead_delete_total', '_controller' => 'App\\Controller\\LeadController::delete_total'], [], ['POST' => 0], null, false, false, null]],
        464 => [[['_route' => 'app_lead_delete_all', '_controller' => 'App\\Controller\\LeadController::deleteAll'], [], ['POST' => 0], null, false, false, null]],
        514 => [[['_route' => 'app_planning_edit_inline_user', '_controller' => 'App\\Controller\\PlanningController::editInlineUser'], ['id'], ['POST' => 0], null, false, false, null]],
        538 => [[['_route' => 'app_planning_new_lead', '_controller' => 'App\\Controller\\PlanningController::newlead'], ['leadId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        559 => [[['_route' => 'app_planning_for_lead', '_controller' => 'App\\Controller\\PlanningController::showForLead'], ['leadId'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_planning_show', '_controller' => 'App\\Controller\\PlanningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        612 => [[['_route' => 'app_planning_edit_inline', '_controller' => 'App\\Controller\\PlanningController::editInlinePlanning'], ['id'], ['POST' => 0], null, false, false, null]],
        628 => [[['_route' => 'app_planning_editplanning', '_controller' => 'App\\Controller\\PlanningController::editplanning'], ['id'], ['POST' => 0], null, false, false, null]],
        636 => [[['_route' => 'app_planning_edit', '_controller' => 'App\\Controller\\PlanningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [
            [['_route' => 'app_planning_delete', '_controller' => 'App\\Controller\\PlanningController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
