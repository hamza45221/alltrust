@extends('dashboard.dashboard')

@section('content')

    <body>
    <!-- Content -->
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- Multi Steps Registration -->
            <div class="d-flex col-12 align-items-center justify-content-center authentication-bg p-5">
                <div class="col-12">
                    <div id="multiStepsValidation" class="bs-stepper border-none shadow-none mt-5">
                        <div class="bs-stepper-content px-0">
                            <form id="multiStepsForm" method="POST" action="{{ route('newAdviser-store') }}">
                                @csrf
                                <!-- Adviser Details -->
                                <div id="adviserDetails" class="content" style="display: block;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Adviser Details</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-md-12">
                                            <label class="form-label" for="selected_adviser">Select Adviser</label>
                                            <select name="selected_adviser_id" id="selected_adviser" class="form-control">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="company_name">Company Name</label>
                                            <input type="text" name="company_name" id="company_name" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="trading_names">Trading Name</label>
                                            <input type="text" name="trading_name" id="trading_name" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="address">Address</label>
                                            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="country">Country</label>
                                            <input type="text" name="country" id="country" class="form-control" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="postCode">Post Code</label>
                                            <input type="text" name="post_code" id="postCode" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="shareholderDetails">Details of Primary Shareholder/Owner</label>
                                            <input type="text" name="share_holder_details" id="shareholderDetails" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="regulated_adviser">Number of Regulated Advisers</label>
                                            <input type="number" name="regulated_adviser" id="regulated_adviser" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="contactEmail">Company Contact Email Address</label>
                                            <input type="email" name="contact_email" id="contactEmail" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="website">Website</label>
                                            <input type="url" name="website" id="website" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="telephone">Telephone Number</label>
                                            <input type="tel" name="telephone" id="telephone" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <p>We will use the above email address to send you notifications about our online system, as well as literature changes and other important company announcements.</p>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="fca_firms_reference">FCA Firms Reference Number:</label>
                                            <input type="tel" name="fca_firms_reference" id="fca_firms_reference" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <label class="form-label" for="directly_Authorised">
                                                    <input type="checkbox" name="directly_authorised_checked" id="directly_Authorised" />
                                                    Directly Authorised
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="appointed_representative">
                                                    <input type="checkbox" name="appointed_representative_checked" id="appointed_representative" />
                                                    Appointed Representative
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <p>We will use the above email address to send you notifications about our online system, as well as literature changes and other important company announcements.</p>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="principal_comapny_name">Principal Company Name</label>
                                                    <input type="text" name="principal_comapny_name" id="principal_comapny_name" class="form-control" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="their_frn">Their FRN</label>
                                                    <input type="text" name="their_frn" id="their_frn" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Do you advise clients that have overseas connections?</p>
                                            <label>
                                                <input type="radio" value="yes" name="advice" id="yes" class="" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="advice" id="no" class="" />
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="provide_countries">If yes, please provide countries:</label>
                                            <textarea name="provide_countries" id="provide_countries" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="hear_about_us">Where did you hear about us?</label>
                                            <input type="text" name="hear_about_us" id="hear_about_us" class="form-control" />
                                        </div>

                                        <p>How do you generate new business? (Please feel free to tick more than one)</p>
                                        <div class="col-md-12">
                                            <label class="form-label" for="word_of_referrals">
                                                <input type="checkbox" name="word_of_referrals_checked">
                                                Word of mouth / referrals
                                            </label>
                                            <div class="col-md-12">
                                                <label class="form-label" for="lead_generation">
                                                    <input type="checkbox" name="lead_generation_checked">
                                                    Lead generation company, if yes, please specify
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="marketing">
                                                    <input type="checkbox" name="marketing_checked">
                                                    Marketing
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="other_specify">
                                                    <input type="checkbox" name="other_specify_checked">
                                                    Other, if yes, please specify
                                                </label>
                                                <input type="text" name="other_specify" id="other_specify" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <p>Do you have restrictions on your permission?</p>
                                            <label>
                                                <input type="radio" value="yes" name="restrictions_yes_permission" id="yes" class="" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="restrictions_yes_permission" id="no" class="" />
                                                No
                                            </label>

                                            <p>If yes, please provide details:</p>
                                            <input type="text" name="restrictions_yes_permission_answer" id="hear_about_us" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <p>Have any sanctions been made against the company historically by any regulatory or official body e.g., HMRC/FCA?</p>
                                            <label>
                                                <input type="radio" value="yes" name="sanctions" id="yes" class="" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="sanctions" id="no" class="" />
                                                No
                                            </label>
                                            <label>If yes, please provide details:</label>
                                            <input type="text" name="sanctions_yes_answer" id="hear_about_us" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <p>Do you have any connection via people, corporate structures, or premises to any investment firm, product/fund provider, or introducer of business?</p>
                                            <label>
                                                <input type="radio" value="yes" name="connection_connection" id="yes" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="connection_connection" id="no" />
                                                No
                                            </label>
                                            <p>If yes, please provide details:</p>
                                            <input type="text" name="connection_connection_yes_answer" id="hear_about_us" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="professional_indemnity_insurance">What level of professional indemnity insurance do you hold?</label>
                                            <input type="text" name="professional_indemnity_insurance" id="professional_indemnity_insurance" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="policy_excess_DB">Policy excess DB transfer £</label>
                                            <input type="text" name="policy_excess_DB" id="policy_excess_DB" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <p>Do you have separate Cyber Security insurance?</p>
                                            <label>
                                                <input type="radio" value="yes" name="separate_cyber_security" id="yes" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="separate_cyber_security" id="no" />
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12">
                                            <p>Do you hold permissions for advising on defined benefit (DB) transfers?</p>
                                            <label>
                                                <input type="radio" value="yes" name="permissions_for_advising" id="yes" />
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="permissions_for_advising" id="no" />
                                                No
                                            </label>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fee & Commission -->
                                <div id="personalInfoValidation" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Fee & Commission</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-md-6">
                                            <label class="form-label" for="initial_advice_fee">Initial Advice Fee</label>
                                            <input type="text" name="initial_advice_fee" id="initial_advice_fee" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="going_Annual_fee">Ongoing Annual Management Fee</label>
                                            <input type="text" name="going_annual_fee" id="going_Annual_fee" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="house_portfolio_solutions">In-House Model Portfolio Solutions</label>
                                            <input type="text" name="house_portfolio_solutions" id="house_portfolio_solutions" class="form-control" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="receive_provider_commission">Do you receive any provider commissions?</label>
                                            <input type="text" name="receive_provider_commission" id="receive_provider_commission" class="form-control" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Investment -->
                                <div id="personalInfoValidation" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Investment Strategy</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-md-12">
                                            <div>
                                                <input type="checkbox" id="platformWrap" name="investmentStrategy[]" value="Platform / WRAP" />
                                                <label for="platformWrap">Platform / WRAP</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="advisoryStockbroker" name="investmentStrategy[]" value="Advisory Stockbroker" />
                                                <label for="advisoryStockbroker">Advisory Stockbroker</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="commercialProperty" name="investmentStrategy[]" value="Commercial Property" />
                                                <label for="commercialProperty">Commercial Property</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="depositAccounts" name="investmentStrategy[]" value="Deposit Accounts" />
                                                <label for="depositAccounts">Deposit Accounts</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="fundsDirectViaPlatform" name="investmentStrategy[]" value="Funds (direct via a Platform)" />
                                                <label for="fundsDirectViaPlatform">Funds (direct via a Platform)</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="dmvModelPortfolios" name="investmentStrategy[]" value="DMV / Model Portfolios" />
                                                <label for="dmvModelPortfolios">DMV / Model Portfolios</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="nonMassMarketInvestments" name="investmentStrategy[]" value="Non Mass Market Investments" />
                                                <label for="nonMassMarketInvestments">Non Mass Market Investments</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="highRiskInvestments" name="investmentStrategy[]" value="High Risk Investments as defined by FCA" />
                                                <label for="highRiskInvestments">High Risk Investments as defined by FCA</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="restrictedMassMarket" name="investmentStrategy[]" value="Restricted Mass Market Investments" />
                                                <label for="restrictedMassMarket">Restricted Mass Market Investments</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="structuredeposit" name="investmentStrategy[]" value="Structure Deposit" />
                                                <label for="structuredeposit">Structure Deposit</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Will you be running / managing the portfolios on behalf of any Clients?</label>
                                            <div>
                                                <input type="radio" name="runningManagingPortfolios" id="yesPortfolios" value="Yes" />
                                                <label for="yesPortfolios">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="runningManagingPortfolios" id="noPortfolios" value="No" />
                                                <label for="noPortfolios">No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">If “Yes” this will be on an:</label>
                                            <div>
                                                <input type="radio" name="basis" id="advisoryBasis" value="Advisory basis" />
                                                <label for="advisoryBasis">Advisory basis</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="basis" id="discretionaryBasis" value="Discretionary basis" />
                                                <label for="discretionaryBasis">Discretionary basis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="mt-3">If you are running / managing portfolios, please send an example portfolio alongside our Adviser Registration form.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">We appreciate financial advisers with a large amount of investment companies, however, please can you detail the top 4 companies your firm uses:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="principalCompanyName1">Principal Company Name</label>
                                            <input type="text" name="principal_company_name1" id="principalCompanyName1" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="principalCompanyName2">Principal Company Name</label>
                                            <input type="text" name="principal_company_name2" id="principalCompanyName2" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="principalCompanyName3">Principal Company Name</label>
                                            <input type="text" name="principal_company_name3" id="principalCompanyName3" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="principalCompanyName4">Principal Company Name</label>
                                            <input type="text" name="principal_company_name4" id="principalCompanyName4" class="form-control" />
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bank Details -->
                                <div id="bank_details" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Bank Details</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="row g-6">
                                            <div class="col-md-12">
                                                <label class="form-label" for="accountName">Account Name</label>
                                                <input type="text" name="account_name" id="accountName" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="bankName">Bank Name</label>
                                                <input type="text" name="bank_name" id="bankName" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="accountNumber">Account Number</label>
                                                <input type="text" name="account_number" id="accountNumber" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="sort_code">Sort Code</label>
                                                <input type="text" name="sort_code" id="sort_code" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- DB Transfer -->
                                <div id="BD_Transfer" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Defined Benefit (DB) Transfer</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-md-12">
                                            <label class="form-label">
                                                <input type="checkbox" name="not_applicable" id="not_applicable">
                                                Not Applicable
                                            </label>
                                        </div>

                                        <div class="col-md-12">
                                            <p>How many advisers within your business are permitted to advise on DB transfers?</p>
                                            <input type="text" name="advisers_permitted" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <p>How many members of staff provide a supervisory position in relation to DB transfers?</p>
                                            <input type="text" name="staff_supervisory_position" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <p>Are you a member of the Pension Transfer Gold Standard?</p>
                                            <label>
                                                <input type="radio" value="yes" name="gold_standard" id="gold_standard_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="gold_standard" id="gold_standard_no">
                                                No
                                            </label>
                                            <label>
                                                <input type="radio" value="in_progress" name="gold_standard" id="gold_standard_progress">
                                                In Progress
                                            </label>
                                        </div>

                                        <h5>Please confirm the number of DB transfers your firm has made in the previous 12, 24, and 36-month periods:</h5>
                                        <div>
                                            <label>Number in previous 12 months:</label>
                                            <input type="text" name="db_transfers_12_months" class="form-control">
                                            <label>Total value £:</label>
                                            <input type="text" name="total_value_12_months" class="form-control">
                                            <label>DB transfers as a % of all transfers:</label>
                                            <input type="text" name="percentage_db_transfers_12_months" class="form-control">
                                        </div>

                                        <div>
                                            <label>Number in previous 24 months:</label>
                                            <input type="text" name="db_transfers_24_months" class="form-control">
                                            <label>Total value £:</label>
                                            <input type="text" name="total_value_24_months" class="form-control">
                                            <label>DB transfers as a % of all transfers:</label>
                                            <input type="text" name="percentage_db_transfers_24_months" class="form-control">
                                        </div>

                                        <div>
                                            <label>Number in previous 36 months:</label>
                                            <input type="text" name="db_transfers_36_months" class="form-control">
                                            <label>Total value £:</label>
                                            <input type="text" name="total_value_36_months" class="form-control">
                                            <label>DB transfers as a % of all transfers:</label>
                                            <input type="text" name="percentage_db_transfers_36_months" class="form-control">
                                        </div>

                                        <h5>Number of complaints in relation to the DB transfer advice in the previous 12, 24, and 36-month periods:</h5>
                                        <div>
                                            <label>Number in previous 12 months:</label>
                                            <input type="text" name="complaints_12_months" class="form-control">
                                            <label>Number of cases on which redress was offered:</label>
                                            <input type="text" name="redress_cases_12_months" class="form-control">
                                        </div>

                                        <div>
                                            <label>Number in previous 24 months:</label>
                                            <input type="text" name="complaints_24_months" class="form-control">
                                            <label>Number of cases on which redress was offered:</label>
                                            <input type="text" name="redress_cases_24_months" class="form-control">
                                        </div>

                                        <div>
                                            <label>Number in previous 36 months:</label>
                                            <input type="text" name="complaints_36_months" class="form-control">
                                            <label>Number of cases on which redress was offered:</label>
                                            <input type="text" name="redress_cases_36_months" class="form-control">
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>What percentage of your DB transfers over the last 12 months were to allow members to immediately access their pension benefits via pension freedoms?</p>
                                            <input type="text" name="percentage_db_transfers" class="form-control">
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Is your Pension Transfer Specialist internal or external?</p>
                                            <label>
                                                <input type="radio" value="internal" name="pension_specialist" id="pension_specialist_internal">
                                                Internal
                                            </label>
                                            <label>
                                                <input type="radio" value="external" name="pension_specialist" id="pension_specialist_external">
                                                External
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If internal, do you act as "Pension Transfer Specialist" for other FCA regulated firms?</p>
                                            <label>
                                                <input type="radio" value="yes" name="act_as_specialist" id="act_as_specialist_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="act_as_specialist" id="act_as_specialist_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If yes, please provide details of firms:</p>
                                            <textarea name="details_of_firms" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If external, please provide contact details for your Pension Transfer Specialist:</p>
                                            <label>Contact Name:</label>
                                            <input type="text" name="contact_name" class="form-control">
                                            <label>Email Address:</label>
                                            <input type="email" name="email_address" class="form-control">
                                            <label>Phone Number:</label>
                                            <input type="text" name="phone_number" class="form-control">
                                            <label>Dial Code:</label>
                                            <input type="text" name="dial_code" class="form-control">
                                        </div>

                                        <!-- New Investment Strategy Section -->
                                        <div class="col-md-12 mt-4">
                                            <p>What is a typical investment strategy for a DB transfer i.e. DFM / Platform and with whom?</p>
                                            <textarea name="investment_strategy" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>What is the minimum CETV you would normally consider appropriate for a transfer into a Pension Scheme?</p>
                                            <input type="text" name="minimum_cetv" class="form-control">
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you conduct DB transfers for self-invested clients making their own investment decisions?</p>
                                            <label>
                                                <input type="radio" value="yes" name="conduct_db_transfers" id="conduct_db_transfers_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="conduct_db_transfers" id="conduct_db_transfers_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you accept insistent clients on DB transfers?</p>
                                            <label>
                                                <input type="radio" value="yes" name="accept_insistent_clients" id="accept_insistent_clients_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="accept_insistent_clients" id="accept_insistent_clients_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you work with unregulated lead generation firms / websites for DB transfers?</p>
                                            <label>
                                                <input type="radio" value="yes" name="work_with_unregulated_firms" id="work_with_unregulated_firms_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="work_with_unregulated_firms" id="work_with_unregulated_firms_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you receive referrals from other FCA regulated adviser firms that do not have permissions to advise on DB transfers?</p>
                                            <label>
                                                <input type="radio" value="yes" name="receive_referrals" id="receive_referrals_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="receive_referrals" id="receive_referrals_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If yes, please provide details:</p>
                                            <textarea name="referral_details" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>What percentage of your DB transfer business does this make up?</p>
                                            <input type="text" name="db_transfer_percentage" class="form-control">
                                        </div>

                                        <!-- New Questions -->
                                        <div class="col-md-12 mt-4">
                                            <p>How do you source your DB clients?</p>
                                            <textarea name="db_client_source" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you have any relationships with final salary scheme trustees / sponsoring employers?</p>
                                            <label>
                                                <input type="radio" value="yes" name="relationships_with_trustees" id="relationships_with_trustees_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="relationships_with_trustees" id="relationships_with_trustees_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If yes, please provide details:</p>
                                            <textarea name="trustee_relationship_details" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you work on a contingent charging basis?</p>
                                            <label>
                                                <input type="radio" value="yes" name="contingent_charging" id="contingent_charging_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="contingent_charging" id="contingent_charging_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>If yes, please specify what contingent charging is used:</p>
                                            <textarea name="contingent_charging_details" class="form-control"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you offer a triage service?</p>
                                            <label>
                                                <input type="radio" value="yes" name="triage_service" id="triage_service_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="triage_service" id="triage_service_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Do you have an advice fee and implementation fee?</p>
                                            <label>
                                                <input type="radio" value="yes" name="advice_fee" id="advice_fee_yes">
                                                Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="advice_fee" id="advice_fee_no">
                                                No
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            <p>Please provide a breakdown of the typical charging structure of a personal recommendation to transfer out a DB Pension to either a SIPP or a SSAS (including the investment costs once transferred):</p>
                                            <textarea name="charging_structure_breakdown" class="form-control"></textarea>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Policies & Financial Crime -->
                                <div id="polocoesCrime" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Policies & Financial Crime</h4>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-md-12">
                                            <div>
                                                <input type="radio" name="policiesCoverage" id="yesPolicies" value="Yes" />
                                                <label for="yesPolicies">Yes</label>
                                                <input type="radio" name="policiesCoverage" id="noPolicies" value="No" />
                                                <label for="noPolicies">No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="notCoveredDetails">Please provide details of what is not covered by your policies:</label>
                                            <textarea name="not_covered_details" id="notCoveredDetails" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <label class="form-label">Client Risk Category Percentage</label>
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <label for="highRisk">High %</label>
                                                    <input type="text" name="high_risk" id="highRisk" class="form-control" />
                                                </div>
                                                <div class="me-2">
                                                    <label for="standardRisk">Standard %</label>
                                                    <input type="text" name="standard_risk" id="standardRisk" class="form-control" />
                                                </div>
                                                <div>
                                                    <label for="lowRisk">Low %</label>
                                                    <input type="text" id="low_risk" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Do you have a relationship with any sanctioned or sensitive jurisdictions?</label>
                                            <div>
                                                <input type="radio" name="sensitive_jurisdictions" id="yesJurisdictions" value="Yes" />
                                                <label for="yesJurisdictions">Yes</label>
                                                <input type="radio" name="sensitive_jurisdictions" id="noJurisdictions" value="No" />
                                                <label for="noJurisdictions">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Do you accept clients classified as PEPs in any form?</label>
                                            <div>
                                                <input type="radio" name="accept_PEPs" id="yesPEPs" value="Yes" />
                                                <label for="yesPEPs">Yes</label>
                                                <input type="radio" name="accept_PEPs" id="noPEPs" value="No" />
                                                <label for="noPEPs">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Is enhanced due diligence (EDD) requested for all high risk and/or PEP relationships?</label>
                                            <div>
                                                <input type="radio" name="enhanced_due_diligence" id="yesEDD" value="Yes" />
                                                <label for="yesEDD">Yes</label>
                                                <input type="radio" name="enhanced_due_diligence" id="noEDD" value="No" />
                                                <label for="noEDD">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">If yes, please provide details of what is collected:</label>
                                            <textarea name="add_details_text" id="add_details_text" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Where required, do you collect source of funds & wealth?</label>
                                            <div>
                                                <input type="radio" name="collect_source" id="yesSource" value="Yes" />
                                                <label for="yesSource">Yes</label>
                                                <input type="radio" name="collect_source" id="noSource" value="No" />
                                                <label for="noSource">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="reviewFrequency">How often are these policies revisited and reviewed?</label>
                                            <input type="text" name="review_frequency" id="reviewFrequency" class="form-control" />
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Non Standard Assets -->
                                <div id="non_standard_assets" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Non Standard Assets</h4>
                                    </div>
                                    <div class="row g-6">
                                        <p>If you are recommending or plan to recommend an investment into a non-mass market investment, restricted mass market investment or high risk investment please answer the following questions:</p>
                                        <div class="col-md-12">
                                            <label class="form-label">Do you work with unregulated firms / websites for these type of investment?</label>
                                            <div>
                                                <input type="radio" name="unregulated_firms" id="yesUnregulated" value="Yes" />
                                                <label for="yesUnregulated">Yes</label>
                                                <input type="radio" name="unregulated_firms" id="noUnregulated" value="No" />
                                                <label for="noUnregulated">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="firmsDetails">If yes, please provide details of the firms:</label>
                                            <textarea name="firms_details" id="firms_details" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="totalBusinessPercentage">What % of your total business is through unregulated firms?</label>
                                            <input type="text" name="total_business_percentage" id="totalBusinessPercentage" class="form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="investmentsIntroduced">What investments are introduced this way (please include name, type, geographical location and whether the local tax authority/regulator is investigating):</label>
                                            <textarea name="investments_introduced" id="investmentsIntroduced" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Have you or will you meet the client face-to-face or over a video link?</label>
                                            <div>
                                                <input type="radio" name="meet_client" id="yesMeetClient" value="Yes" />
                                                <label for="yesMeetClient">Yes</label>
                                                <input type="radio" name="meet_client" id="noMeetClient" value="No" />
                                                <label for="noMeetClient">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="businessConducted">If not, how has or will the business be conducted (i.e., through a 3rd party, over distance marketing, etc.)?</label>
                                            <textarea name="business_conducted" id="businessConducted" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Will you only offer non-standard investments to knowledgeable investors which include high net wealth individuals, sophisticated investors or elective professional clients?</label>
                                            <div>
                                                <input type="radio" name="knowledgeable_investors" id="yesKnowledgeable" value="Yes" />
                                                <label for="yesKnowledgeable">Yes</label>
                                                <input type="radio" name="knowledgeable_investors" id="noKnowledgeable" value="No" />
                                                <label for="noKnowledgeable">No</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="criteriaDetails">If yes, how will you ensure that the client fits the required criteria?</label>
                                            <textarea name="criteria_details" id="criteriaDetails" class="form-control" rows="3"></textarea>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Agreement Section -->
                                <div id="agreement_section" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Agreement</h4>
                                        <p>Alltrust agrees that where appropriate instructions have been received from the scheme member(s) and until notification by the scheme member(s) to the contrary, any agreed fees to the above Financial Adviser will be paid electronically from the Scheme to the bank account detailed above. Initial fees will be paid once sufficient funds are available in the scheme member’s bank account and annual fees will be paid on or around the anniversary that the scheme member was admitted to the scheme. Unless VAT is payable, an invoice will not need to be received by us prior to the payment being made.</p>
                                        <p>The following are parties to this agreement:</p>
                                    </div>
                                    <div class="row g-6">
                                        <h5>Signed on behalf of Financial Adviser firm</h5>
                                        <div class="row g-6">
                                            <div class="col-md-12">
                                                <label class="form-label" for="signatureAdviser">Signature</label>
                                                <input type="file" name="signature_adviser" id="signatureAdviser" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="managementFunction">Senior Management Function Held</label>
                                                <input type="text" name="management_function" id="managementFunction" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="positionAdviser">Position</label>
                                                <input type="text" name="position_adviser" id="positionAdviser" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="financialAdviserNumber">Financial Adviser Number</label>
                                                <input type="text" name="financial_adviser_number" id="financialAdviserNumber" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Date</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="Day" name="day" class="form-control me-2" />
                                                    <input type="number" placeholder="Month" name="month" class="form-control me-2" />
                                                    <input type="number" placeholder="Year" name="year" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="mt-4">Signed on behalf of Alltrust</h5>
                                        <div class="row g-6">
                                            <div class="col-md-12">
                                                <label class="form-label" for="signatureAlltrust">Signature</label>
                                                <input type="file" name="signature_alltrust" id="signatureAlltrust" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="positionAlltrust">Position</label>
                                                <input type="text" name="position_alltrust" id="positionAlltrust" class="form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Date</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="Day" name="day2" class="form-control me-2" />
                                                    <input type="number" placeholder="Month" name="month2" class="form-control me-2" />
                                                    <input type="number" placeholder="Year" name="year2" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                <i class="ti ti-arrow-right ti-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Final Step -->
                                <div id="billingLinksValidation" class="content" style="display: none;">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Register Adviser</h4>
                                    </div>
                                    <div class="row g-6" id="adviserFormsContainer">
                                        <div class="adviser-form">
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="adviserName">Adviser Name</label>
                                                <input type="text" name="adviser_name[]" class="form-control" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="adviserFCAReference">Adviser FCA Reference</label>
                                                <input type="text" name="adviser_fca_reference[]" class="form-control" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>
                                                    <input type="checkbox" name="approved_for_transfer_db[]" value="yes">
                                                    Approved for transfer of DB
                                                </label>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="adviserEmail">Adviser Email</label>
                                                <input type="email" name="adviser_email[]" class="form-control" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="branch">Branch</label>
                                                <input type="text" name="branch[]" class="form-control" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>
                                                    <input type="checkbox" class="toggle-online-access" name="requires_online_access[]" value="yes">
                                                    Requires online access
                                                </label>
                                            </div>

                                            <div class="col-12 d-flex justify-content-between mb-5">
                                                <button type="button" class="btn btn-danger btn-remove">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-5">
                                        <button type="button" class="btn btn-primary btn-add-adviser">Add Adviser</button>
                                        <button class="btn btn-label-secondary btn-prev">
                                            <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="submit" class="btn btn-success btn-submit">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Submit</span>
                                            <i class="ti ti-arrow-right ti-xs"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Multi Steps Registration -->
        </div>
    </div>

    <!-- JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const nextBtns = document.querySelectorAll('.btn-next');
            const prevBtns = document.querySelectorAll('.btn-prev');
            const contents = document.querySelectorAll('.content');
            let currentStep = 0;

            nextBtns.forEach((btn) => {
                btn.addEventListener('click', () => {
                    if (currentStep < contents.length - 1) {
                        contents[currentStep].style.display = 'none'; // Hide current step
                        currentStep++; // Go to next step
                        contents[currentStep].style.display = 'block'; // Show next step
                    }
                    toggleButtonState();
                });
            });

            prevBtns.forEach((btn) => {
                btn.addEventListener('click', () => {
                    if (currentStep > 0) {
                        contents[currentStep].style.display = 'none'; // Hide current step
                        currentStep--; // Go to previous step
                        contents[currentStep].style.display = 'block'; // Show previous step
                    }
                    toggleButtonState();
                });
            });

            function toggleButtonState() {
                prevBtns.forEach((btn) => {
                    btn.disabled = currentStep === 0;
                });
            }

            // Add Adviser Functionality
            const addAdviserBtn = document.querySelector('.btn-add-adviser');
            const adviserFormsContainer = document.getElementById('adviserFormsContainer');

            addAdviserBtn.addEventListener('click', () => {
                const newAdviserForm = document.createElement('div');
                newAdviserForm.classList.add('adviser-form');
                newAdviserForm.innerHTML = `
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="adviserName">Adviser Name</label>
                        <input type="text" name="adviser_name[]" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="adviserFCAReference">Adviser FCA Reference</label>
                        <input type="text" name="adviser_fca_reference[]" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>
                            <input type="checkbox" name="approved_for_transfer_db[]" value="yes">
                            Approved for transfer of DB
                        </label>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="adviserEmail">Adviser Email</label>
                        <input type="email" name="adviser_email[]" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="branch">Branch</label>
                        <input type="text" name="branch[]" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>
                            <input type="checkbox" class="toggle-online-access" name="requires_online_access[]" value="yes">
                            Requires online access
                        </label>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-danger btn-remove">Remove</button>
                    </div>
                `;
                adviserFormsContainer.appendChild(newAdviserForm);
            });

            // Remove Adviser Form Functionality
            adviserFormsContainer.addEventListener('click', (event) => {
                if (event.target.classList.contains('btn-remove')) {
                    const adviserForm = event.target.closest('.adviser-form');
                    adviserFormsContainer.removeChild(adviserForm);
                }
            });
        });
    </script>

    </body>

@endsection
