<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Data::class, function (Faker $faker) {

    $school = [
        'dmajmnhs',
        'anhs',
        'cnhs',
        'pnhs',
        'aofnhs',
        'snhs',
        'mcpi',
        'fali',
        'faith',
        'other'
    ];
    $suffix = [
        $faker->suffix(),
        null
    ];
    $middlename = [
        $faker->firstNameMale(),
        null
    ];
    $gender = [
        'male',
        'female'
    ];
    $birthplace = [
        'carmen, davao del norte',
        'panabo, davao del norte',
        'davao, davao del norte',
        'magsaysay, alejal, carmen davao del norte',
        'alejal, carmen davao del norte',
        'wellcare midwife clinic, ising, carmen, davao del norte',
        'blue star, ising, carmen, davao del norte',
        'rivera medical clinic, panabo city',
        'carmen district hospital',
        'tagum regional hospital'
    ];
    $religion = [
        'roman catholic',
        'baptist',
        'iglesia ni cristo',
        'islam',
        'orthodox',
        'seventh day adventist'
    ];
    $barangay = [
        'new camiling',
        'alejal',
        'ising',
        'san isidro',
        'santo nino',
        'poblacion'
    ];
    $province = [
        'davao del norte',
        'davao del sur',
        'davao oriental'
    ];
    $city = [
        'davao',
        'panabo',
        'tagum'
    ];
    $telephone = [
        $faker->phoneNumber(),
        null
    ];
    $email = [
        $faker->email(),
        null
    ];

    $father = [
        $faker->firstNameMale,
        null
    ];
    $mother = [
        $faker->firstNameFemale,
        null
    ];
    $last =[
        $faker->lastName(),
        null
    ];
    $occupation = [
        'teacher',
        'doctor',
        'housekeeper',
        'engineer',
        'entrepreneur',
        'banana grower',
        'business ceo',
        'accountant',
        'caregiver',
        'domestic helper'
    ];

    $track = [
        'tvl',
        'gas'
    ];
    $sa = [
        'none',
        'ip',
        '4ps'
    ];
    $years = [
      2002,
    2001
    ];
    $fake_first_name = $faker->firstNameMale;
    $fake_middle_name = $middlename[mt_rand(0, sizeof($middlename)-1)];
    $fake_last_name = $faker->lastName;
    $fake_suffix = $suffix[mt_rand(0, sizeof($suffix)-1)];

    return [
        'admission_level'=> mt_rand(11, 12),
        'previous_school'=> $school[mt_rand(0, sizeof($school)-1 )],
        'lrn'=> $faker->randomNumber(),
        'track'=>$track[mt_rand(0, sizeof($track)-1)],
        'first_name'=> $fake_first_name,
        'middle_name'=> $fake_middle_name,
        'last_name'=> $fake_last_name,
        'suffix'=> $fake_suffix,
        'gender'=> $gender[mt_rand(0, sizeof($gender)-1)],
        'citizenship'=> 'filipino',
        'birth_place'=>$birthplace[mt_rand(0, sizeof($birthplace)-1)],
        'birth_month'=>mt_rand(1, 12),
        'birth_day'=>mt_rand(1, 31),
        'birth_year'=>$years[mt_rand(0, sizeof($years)-1)],
        'social_assistance'=>$sa[mt_rand(0, sizeof($sa)-1)],
        'religion'=> $religion[mt_rand(0, sizeof($religion)-1)],
        'barangay'=> $barangay[mt_rand(0, sizeof($barangay)-1)],
        'province'=> $province[mt_rand(0, sizeof($province)-1)],
        'city'=> $city[mt_rand(0, sizeof($city)-1)],
        'telephone_number'=> $telephone[mt_rand(0, sizeof($telephone)-1)],
        'cellphone_number'=> $faker->e164PhoneNumber(),
        'email'=> $email[mt_rand(0, sizeof($email)-1)],
        'father_first_name'=> $father[mt_rand(0, sizeof($father)-1)],
        'father_last_name'=> $last[mt_rand(0, sizeof($last)-1)],
        'father_mobile_number'=> $telephone[mt_rand(0, sizeof($telephone)-1)],
        'father_occupation'=> $occupation[mt_rand(0, sizeof($occupation)-1)],
        'mother_first_name'=> $mother[mt_rand(0, sizeof($mother)-1)],
        'mother_last_name'=> $last[mt_rand(0, sizeof($last)-1)],
        'mother_mobile_number'=> $telephone[mt_rand(0, sizeof($telephone)-1)],
        'mother_occupation'=> $occupation[mt_rand(0, sizeof($occupation)-1)],
        'guardian_first_name'=> $father[mt_rand(0, sizeof($father)-1)],
        'guardian_last_name'=> $last[mt_rand(0, sizeof($last)-1)],
        'guardian_mobile_number'=> $telephone[mt_rand(0, sizeof($telephone)-1)],
        'guardian_occupation'=> $occupation[mt_rand(0, sizeof($occupation)-1)],
        'full_name' => strtolower($fake_first_name).' '.strtolower($fake_middle_name).' '.strtolower($fake_last_name).' '.strtolower($fake_suffix)
    ];
});
