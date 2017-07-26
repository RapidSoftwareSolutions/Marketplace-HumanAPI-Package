[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/HumanAPI/functions?utm_source=RapidAPIGitHub_HumanAPIFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# HumanAPI Package
Real-time access to digital, structured health and medical data from providers, labs, pharmacies, devices and apps
* Domain: [HumanAPI](http://humanapi.co)
* Credentials:

## How to get credentials: 
0. Access token to be provided by user



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## HumanAPI.getAllergies
Get a list of medical allergies the user has had so far

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleAllergy
Returns a single allergy

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| allergyId  | String| Id of the allergy

## HumanAPI.getMedicalEncounters
Get a list of medical encounters the user has had so far

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleMedicalEncounter
Returns a single encounter

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| encounterId| String| Id of the encounter

## HumanAPI.getMedicalFunctionalStatuses
Get a list of medical functional statuses associated with the user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleFunctionalStatus
Returns a single functional status

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| Access token received from HumanAPI
| functionalStatusId| String| Id of the functional status

## HumanAPI.getMedicalImmunizations
Get a list of immunizations the user has had so far

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleImmunization
Returns a single immunization

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token received from HumanAPI
| immunizationId| String| Id of the immunization

## HumanAPI.getMedicalInstructions
Get a list of medical instructions associated with the user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleInstruction
Returns a single instruction

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token received from HumanAPI
| instructionId| String| Id of the instruction

## HumanAPI.getMedicalMedications
Get a list of medical medications the user has had so far

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleMedication
Returns a single medication

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from HumanAPI
| medicationId| String| Id of the medication

## HumanAPI.getMedicalNarratives
Get a list of medical narratives associated with the user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleNarrative
Returns a single narrative

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| narrativeId| String| Id of the narrative

## HumanAPI.getSingleOrganization
Returns a single organization

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token received from HumanAPI
| organizationId| String| Id of the organization

## HumanAPI.getMedicalPlansOfCare
Get a list of medical plans of care associated with the user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSinglePlanOfCare
Returns a single plan of care

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from HumanAPI
| planOfCareId| String| Id of the plan of care

## HumanAPI.getMedicalProblems
Get a list of medical problems the user has had so far

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleProblem
Returns a single medical problem

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| problemId  | String| Id of the problem

## HumanAPI.getMedicalProcedures
Get a list of medical procedures associated with the user

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleProcedure
Returns a single medical procedure

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| procedureId| String| Id of the procedure

## HumanAPI.getMedicalProfile
Get the current medical health profile of the user. Returns user’s data that most likely doesn’t change: demographics, smoking status, alcohol use, etc.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getMedicalTestResults
Get a list of medical lab’s results from a user’s medical record

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleTestResults
Returns a single test result

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Access token received from HumanAPI
| testResultId| String| Id of the test result

## HumanAPI.getTimeline
Returns a timeline of the user. It shows every timestamped medical object recorded into our system. The full object details are not available here but they are linked and available via own resource end points.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getVitalsReadings
Get the user’s Vitals reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleVitalsReading
Returns a single vital reading

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token received from HumanAPI
| vitalReadingId| String| Id of the vital reading

## HumanAPI.getUserCCDs
Returns full CCDs available for the user including the raw xml.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSingleCCD
Returns single CCD raw payload

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| ccdId      | String| Id of the ccd

## HumanAPI.getUserActivities
Get a list of activities the user has

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSingleActivity
Returns single activity

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| activityId | String| Id of the activity

## HumanAPI.getActivitySummaries
Get a list of daily activity summaries reported by the data sources.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getSingleActivitySummaryById
Returns single activity summary by its Id

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| summaryId  | String| Id of the summary

## HumanAPI.getSingleActivitySummaryByDate
Returns single activity summary by its date

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Access token received from HumanAPI
| summaryDate| DatePicker| Date of the summary

## HumanAPI.getLatestBloodGlucoseReading
Returns the latest blood glucose reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBloodGlucoseReadings
Returns all blood glucose readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getLatestBloodOxygenReading
Returns the latest blood oxygen reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBloodOxygenReadings
Returns all blood oxygen readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getLatestBloodPressureReading
Returns the latest blood pressure reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBloodPressureReadings
Returns all blood pressure readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getLatestBMIReading
Returns the latest bmi reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBMIReadings
Returns all bmi readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBodyFatReading
Returns a body fat reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getBodyFatReadings
Returns all body fat readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getGeneticTraits
Returns genetic traits

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getGenotypes
Returns a list of requested genotypes

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| locations  | List  | Array of locations (SNPs) to request

## HumanAPI.getHeartRateReading
Returns a heart rate reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getHeartRateReadings
Returns all heart rate readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getHeartRateSummaries
Returns a list of heart rate summaries

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getHeartRateSummaryById
Returns a heart rate summary by id

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| hrSummaryId| String| Id of the heart rate summary

## HumanAPI.getHeartRateSummaryByDate
Returns a heart rate summary by date

| Field        | Type      | Description
|--------------|-----------|----------
| accessToken  | String    | Access token received from HumanAPI
| hrSummaryDate| DatePicker| Date of the heart rate summary

## HumanAPI.getHeightReading
Returns a height reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getHeightReadings
Returns all height readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getHumanProfile
Get summary object for a person’s latest health metrics. The data consists of all the discrete health measurements and summary information about the person’s activity and sleep data.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getLocationsReadings
Returns a locations readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserMeals
Get a list of meals the user has

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSingleMeal
Returns a single meal

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| mealId     | String| Id of the meal

## HumanAPI.getUserSleeps
Get a list of sleeps the user has

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSingleSleep
Returns a single sleep

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI
| sleepId    | String| Id of the sleep

## HumanAPI.getUserSleepSummaries
Returns a list of sleep summaries

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSingleSleepSummaryById
Returns single sleep summary by its Id

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| Access token received from HumanAPI
| sleepSummaryId| String| Id of the sleep summary

## HumanAPI.getUserSingleSleepSummaryByDate
Returns single sleep summary by its date

| Field           | Type      | Description
|-----------------|-----------|----------
| accessToken     | String    | Access token received from HumanAPI
| sleepSummaryDate| DatePicker| Date of the sleep summary

## HumanAPI.getUserWeightReading
Returns a weight reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserWeightReadings
Returns all weight readings

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

## HumanAPI.getUserSources
Returns a sources reading

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token received from HumanAPI

