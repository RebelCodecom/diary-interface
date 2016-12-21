<?php

namespace RebelCode\Diary;

/**
 * Represents the hub of the Diary library.
 *
 * @since [*next-version*]
 */
interface DiaryInterface
{
    /**
     * Gets the booking with the given ID.
     *
     * @since [*next-version*]
     *
     * @param string|int $bookingId The ID of the booking.
     *
     * @return BookingInterface|null The booking with the given ID or null if the ID was not found.
     */
    public function getBooking($bookingId);

    /**
     * Queries the storage for bookings.
     *
     * @since [*next-version*]
     *
     * @param mixed $query The query.
     *
     * @return BookingInterface[] An array of booking instances that match the given query.
     */
    public function queryBookings($query);

    /**
     * Inserts the given booking into storage.
     *
     * The ID of the given instance will be ignored. An ID will be assigned to the booking on success.
     *
     * @since [*next-version*]
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return string|int The ID of the inserted booking or false on failure.
     */
    public function insertBooking(BookingInterface $booking);

    /**
     * Updates an existing booking.
     *
     * @since [*next-version*]
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return bool True of success, false on failure.
     */
    public function updateBooking(BookingInterface $booking);

    /**
     * Deletes the booking with the given ID.
     *
     * @since [*next-version*]
     *
     * @param string|int $bookingId The ID of the booking.
     *
     * @return bool True on success, false on failure.
     */
    public function deleteBooking($bookingId);
}
