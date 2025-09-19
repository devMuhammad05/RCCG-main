<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $thumbnail
 * @property string $title
 * @property string $sub_title
 * @property string $category
 * @property string $body
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $thumbnail
 * @property string $title
 * @property string $sub-title
 * @property string $description
 * @property string|null $category
 * @property string $date
 * @property string|null $location
 * @property string|null $venue
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereVenue($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string|null $email
 * @property string $message
 * @property bool $can_be_contacted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereCanBeContacted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereUserId($value)
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationSetting query()
 */
	class NotificationSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property bool $is_shared_anonymously
 * @property string $request
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereIsSharedAnonymously($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereRequest($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PrayerRequest whereUserId($value)
 */
	class PrayerRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property bool $is_shared_anonymously
 * @property string $message
 * @property bool $show_as_featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereIsSharedAnonymously($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereShowAsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Testimony whereUserId($value)
 */
	class Testimony extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $phone_number
 * @property string|null $profession
 * @property string|null $location
 * @property string|null $bio
 * @property string|null $short_testimony
 * @property string $password
 * @property string|null $avatar
 * @property string|null $instagram_url
 * @property string|null $whatsapp_url
 * @property string|null $facebook_url
 * @property string|null $x_url
 * @property string|null $linkedin_url
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Feedback> $feedbacks
 * @property-read int|null $feedbacks_count
 * @property-read \App\Models\NotificationSetting|null $notificationSetting
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PrayerRequest> $prayerRequests
 * @property-read int|null $prayer_requests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Testimony> $testimonies
 * @property-read int|null $testimonies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VolunteerSignup> $volunteerSignups
 * @property-read int|null $volunteer_signups_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereInstagramUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLinkedinUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereShortTestimony($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereWhatsappUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereXUrl($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property array<array-key, mixed> $roles_needed
 * @property string|null $special_requirements
 * @property string|null $hours_required
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VolunteerSignup> $signups
 * @property-read int|null $signups_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereHoursRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereRolesNeeded($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereSpecialRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerOpportunity whereUpdatedAt($value)
 */
	class VolunteerOpportunity extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $volunteer_opportunity_id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string|null $role_selected
 * @property string|null $hours_selected
 * @property string|null $skills_experience
 * @property bool $confirm_availability
 * @property bool $agree_training
 * @property bool $is_cancelled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VolunteerOpportunity $opportunity
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereAgreeTraining($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereConfirmAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereHoursSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereIsCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereRoleSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereSkillsExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VolunteerSignup whereVolunteerOpportunityId($value)
 */
	class VolunteerSignup extends \Eloquent {}
}

