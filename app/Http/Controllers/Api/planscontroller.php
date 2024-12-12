<?php

namespace App\Http\Controllers\API;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlanResource;

class planscontroller extends Controller
{
    public function getAllPlans()
    {

        $allplans = Plan::all();
        return PlanResource::collection($allplans);
    }

    public function getDeveloperPlans()
    {
        $developerplan = Plan::where('category_id', 1)->get();
        return PlanResource::collection($developerplan);
    }

    public function getHomeInteriorPlans()
    {
        $hiplans = Plan::where('category_id', 2)->get();
        return PlanResource::collection($hiplans);
    }

    public function getAgentPlans()
    {
        $agentplans = Plan::where('category_id', 4)->get();
        return PlanResource::collection($agentplans);
    }

    public function getPropertyMgtPlans()
    {
        $propmgt = Plan::where('category_id', 3)->get();
        return PlanResource::collection($propmgt);
    }
}
