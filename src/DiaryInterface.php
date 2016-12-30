<?php

namespace RebelCode\Diary;

use RebelCode\Diary\Query\BookingQueryInterface;

/**
 * Represents the hub of the Diary library.
 *
 * @since 0.1
 */
interface DiaryInterface
{
    /**
     * Gets the booking with the given ID.
     *
     * @since 0.1
     *
     * @param string|int $bookingId The ID of the booking.
     *
     * @return BookingInterface|null The booking with the given ID or null if the ID was not found.
     */
    public function getBooking($bookingId);

    /**
     * Queries the storage for bookings.
     *
     * @since 0.1
     *
     * @param BookingQueryInterface $query The query instance.
     *
     * @return BookingInterface[] An array of booking instances that match the given query.
     */
    public function queryBookings(BookingQueryInterface $query);

    /**
     * Inserts the given booking into storage.
     *
     * The ID of the given instance will be ignored. An ID will be assigned to the booking on success.
     *
     * @since 0.1
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return string|int The ID of the inserted booking or false on failure.
     */
    public function insertBooking(BookingInterface $booking);

    /**
     * Updates an existing booking.
     *
     * @since 0.1
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return bool True of success, false on failure.
     */
    public function updateBooking(BookingInterface $booking);

    /**
     * Deletes the booking with the given ID.
     *
     * @since 0.1
     *
     * @param string|int $bookingId The ID of the booking.
     *
     * @return bool True on success, false on failure.
     */
    public function deleteBooking($bookingId);
}
