<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Advisers;
use Illuminate\Http\Request;

class NewAdviserController extends Controller
{
    public function index()
    {
        return view('dashboard.adviser.newAdviser.newAdviser');

    }
    public function view()
    {
        return view('dashboard.adviser.newAdviser.viewAdviser');

    }
    public function store(Request $request)
    {


        // Create a new Adviser instance
        $adviser = new Advisers();
        $adviser->selected_adviser_id = $request->selected_adviser_id;
        $adviser->company_name = $request->company_name;
        $adviser->trading_name = $request->trading_name;
        $adviser->address = $request->address;
        $adviser->country = $request->country;
        $adviser->post_code = $request->post_code;
        $adviser->share_holder_details = $request->share_holder_details;
        $adviser->regulated_adviser = $request->regulated_adviser;
        $adviser->contact_email = $request->contact_email;
        $adviser->website = $request->website;
        $adviser->telephone = $request->telephone;
        $adviser->fca_firms_reference = $request->fca_firms_reference;
        $adviser->directly_authorised_checked = $request->directly_authorised_checked;
        $adviser->principal_company_name = $request->principal_company_name;
        $adviser->their_frn = $request->their_frn;
        $adviser->advice = $request->advice;
        $adviser->provide_countries = $request->provide_countries;
        $adviser->hear_about_us = $request->hear_about_us;
        $adviser->word_of_referrals_checked = $request->word_of_referrals_checked;
        $adviser->lead_generation_checked = $request->lead_generation_checked;
        $adviser->marketing_checked = $request->marketing_checked;
        $adviser->other_specify_checked = $request->other_specify_checked;
        $adviser->restrictions_yes_permission = $request->restrictions_yes_permission;
        $adviser->restrictions_yes_permission_answer = $request->restrictions_yes_permission_answer;
        $adviser->sanctions = $request->sanctions;
        $adviser->sanctions_yes_answer = $request->sanctions_yes_answer;
        $adviser->connection_connection = $request->connection_connection;
        $adviser->connection_connection_yes_answer = $request->connection_connection_yes_answer;
        $adviser->professional_indemnity_insurance = $request->professional_indemnity_insurance;
        $adviser->policy_excess_DB = $request->policy_excess_DB;
        $adviser->separate_cyber_security = $request->separate_cyber_security;
        $adviser->permissions_for_advising = $request->permissions_for_advising;
        $adviser->initial_advice_fee = $request->initial_advice_fee;
        $adviser->going_annual_fee = $request->going_annual_fee;
        $adviser->house_portfolio_solutions = $request->house_portfolio_solutions;
        $adviser->receive_provider_commission = $request->receive_provider_commission;
        $adviser->investment_strategy = $request->investment_strategy;
        $adviser->running_managing_portfolios = $request->running_managing_portfolios;
        $adviser->basis = $request->basis;
        $adviser->principal_company_name1 = $request->principal_company_name1;
        $adviser->principal_company_name2 = $request->principal_company_name2;
        $adviser->principal_company_name3 = $request->principal_company_name3;
        $adviser->principal_company_name4 = $request->principal_company_name4;
        $adviser->account_name = $request->account_name;
        $adviser->bank_name = $request->bank_name;
        $adviser->account_number = $request->account_number;
        $adviser->sort_code = $request->sort_code;
        $adviser->not_applicable = $request->not_applicable;
        $adviser->advisers_permitted = $request->advisers_permitted;
        $adviser->staff_supervisory_position = $request->staff_supervisory_position;
        $adviser->gold_standard = $request->gold_standard;
        $adviser->db_transfers_12_months = $request->db_transfers_12_months;
        $adviser->total_value_12_months = $request->total_value_12_months;
        $adviser->percentage_db_transfers_12_months = $request->percentage_db_transfers_12_months;
        $adviser->db_transfers_24_months = $request->db_transfers_24_months;
        $adviser->total_value_24_months = $request->total_value_24_months;
        $adviser->percentage_db_transfers_24_months = $request->percentage_db_transfers_24_months;
        $adviser->db_transfers_36_months = $request->db_transfers_36_months;
        $adviser->total_value_36_months = $request->total_value_36_months;
        $adviser->percentage_db_transfers_36_months = $request->percentage_db_transfers_36_months;
        $adviser->complaints_12_months = $request->complaints_12_months;
        $adviser->redress_cases_12_months = $request->redress_cases_12_months;
        $adviser->complaints_24_months = $request->complaints_24_months;
        $adviser->redress_cases_24_months = $request->redress_cases_24_months;
        $adviser->complaints_36_months = $request->complaints_36_months;
        $adviser->redress_cases_36_months = $request->redress_cases_36_months;
        $adviser->percentage_db_transfers = $request->percentage_db_transfers;
        $adviser->pension_specialist = $request->pension_specialist;
        $adviser->act_as_specialist = $request->act_as_specialist;
        $adviser->details_of_firms = $request->details_of_firms;
        $adviser->contact_name = $request->contact_name;
        $adviser->email_address = $request->email_address;
        $adviser->phone_number = $request->phone_number;
        $adviser->dial_code = $request->dial_code;
        $adviser->minimum_cetv = $request->minimum_cetv;
        $adviser->conduct_db_transfers = $request->conduct_db_transfers;
        $adviser->accept_insistent_clients = $request->accept_insistent_clients;
        $adviser->work_with_unregulated_firms = $request->work_with_unregulated_firms;
        $adviser->receive_referrals = $request->receive_referrals;
        $adviser->referral_details = $request->referral_details;
        $adviser->db_transfer_percentage = $request->db_transfer_percentage;
        $adviser->db_client_source = $request->db_client_source;
        $adviser->relationships_with_trustees = $request->relationships_with_trustees;
        $adviser->trustee_relationship_details = $request->trustee_relationship_details;
        $adviser->contingent_charging = $request->contingent_charging;
        $adviser->contingent_charging_details = $request->contingent_charging_details;
        $adviser->triage_service = $request->triage_service;
        $adviser->advice_fee = $request->advice_fee;
        $adviser->charging_structure_breakdown = $request->charging_structure_breakdown;

        // Save the adviser
        $adviser->save();

        // Return a response
        return redirect()->back();
    }

}
