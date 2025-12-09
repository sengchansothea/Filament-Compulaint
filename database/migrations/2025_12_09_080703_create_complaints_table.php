<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->char('case_number',20);
            $table->char('case_num_str',25);
            $table->tinyInteger('case_type_id');
            $table->integer('disputant_id');
            $table->integer('company_id');
            $table->tinyInteger('in_out_domain');
            $table->tinyInteger('company_type_id');
            $table->tinyInteger('sector_id');
            $table->tinyInteger('business_activity');
            $table->tinyInteger('case_objective_id');
            $table->char('case_objective_other',200);
            $table->date('terminated_contract_date');
            $table->time('terminated_contract_time');
            $table->integer('case_objective_des');
            $table->date('disputant_sdate_word');

            $table->tinyInteger('disputant_contract_type');
            $table->tinyInteger('disputant_work_hour_day');
            $table->smallInteger('disputant_work_week');
            $table->smallInteger('disputant_salay');

            $table->tinyInteger('disputant_night_work');
            $table->tinyInteger('disputant_holiday_week');
            $table->tinyInteger('disputant_holiday_year');
            $table->tinyInteger('disputant_terminated_contract');

            $table->text('case_first_reason');
            $table->text('disputant_request');
            $table->char('case_file',30);
            $table->date('case_date');
            $table->date('case_date_entry');
            $table->integer('user_created');
            $table->integer('user_updated');
            $table->dateTime('date_created');
            $table->dateTime('date_updated');
            $table->integer('case_closed');
            $table->date('case_closed_date');
            $table->integer('case_closed_step_id');
            $table->text('case_closed_description');
            $table->tinyInteger('case_closed_result');
            $table->integer('case_cause_id');
            $table->text('case_cause_other');
            $table->integer('case_solution_id');
            $table->char('case_closed_file');
            $table->char('case_closed_plaintiff_file');
            $table->char('case_closed_defendant_file');
            $table->integer('collectives_cause_id');
            $table->char('collectives_officer_rank');
            $table->char('collectives_order_letter_num');
            $table->date('collectives_assigned_officer_date');
            $table->char('collectives_order_letter_file');
            $table->char('collectives_case_file');
            $table->char('collectives_other_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
